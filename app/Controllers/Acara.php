<?php

namespace App\Controllers;
use App\Models\AcaraModel;

class Acara extends BaseController
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tb_acara');
    }

    private function createSlug($text) {
        return url_title($text, '-', true);
    }
    
    public function index()
    {
        $acara = new AcaraModel();
        $data_acara = $acara->findAll();
        $data['list_acara'] = $data_acara;
        $data['title'] = "Acara";
        $data['activeMenu'] = "acara";
        $data['totalAcara'] = $acara->countAll();      

        echo view('cms/admin_header', $data);
        echo view('cms/acara_view',$data);
        echo view('cms/admin_footer');
    }

    public function upload()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        $data['title'] = "Upload"; 
        $data['activeMenu'] = "acara";
        echo view('cms/admin_header', $data);
        echo view('cms/acara_upload', $data);
        echo view('cms/admin_footer');
    }

    public function save()
    {
        // Validtaion
        $rules = [
            'judul' => 'required',
            'tanggal' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required'
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('cms/acara/upload')->withInput()->with('errors', $this->validator->getErrors());
        }


        // ambil foto
        $image = $this->request->getFile('foto');
        
        $acara      = new AcaraModel();
        $id         = $this->request->getPost('id');
        $judul      = $this->request->getPost('judul');
        $tanggal    = $this->request->getPost('tanggal');
        $deskripsi  = $this->request->getPost('deskripsi');

        $slug = $this->createSlug($judul);

        $data = [
            'judul'     => $judul,
            'tanggal'   => $tanggal,
            'deskripsi' => $deskripsi,
            'slug'      => $slug,
        ];

        if(!empty($image) && !empty($image->getName())){
            $namaimage = $image->getName();
            $image->move('img/acara');
            $data['foto'] = $namaimage;
        }
        if (empty($id)){
            // Buat data baru jika $id kosong
            if ($acara->save($data)) {
                session()->getFlashdata('pesan', 'Data Berhasil Di Upload');
                } else {
                    die("gagal");
                    }
                    
        } else {
            // Perbarui data jika $id tidak kosong
            if ($acara->where('id', $id)->set($data)->update()) {
                session()->getFlashdata('pesan', 'Data Berhasil Di Simpan');
            } else {
                die("gagal");
            }
            
        }
        return redirect()->to(base_url('cms/acara'));
    }

    public function delete($id = 0)
    {            
        $acara = new AcaraModel();
        if (!empty($id)) {
            if ($this->builder->delete(['id' => $id]));
            session()->setFlashdata('alert', 'Data Berhasil Di Hapus');
        }
            return redirect()->to('cms/acara');
    }

    public function update($id = 0) 
    {
        $acara = new AcaraModel();
        $data_acara = $acara->findAll();
        $data['list_acara'] = $data_acara;
        $data['title']      = "Update";
        $data['activeMenu'] = "acara";

        $this->builder->select('id, judul, tanggal, foto, deskripsi, slug');
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        $data['acara'] = $query->getRow();

        echo view('cms/admin_header', $data);
        echo view('cms/acara_update', $data);
        echo view('cms/admin_footer');
    }

    public function update_status($id)
    {
        
        $status = $this->request->getPost('status');
        $newStatus = ($status == 1) ? 0 : 1;
        $acara = new AcaraModel();
        $acara->update($id, ['status' => $newStatus]);
        
        return redirect()->to('cms/acara');
    }
}
