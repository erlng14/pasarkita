<?php

namespace App\Controllers;
use App\Models\AboutModel;

class About extends BaseController
{
    protected $db, $builder, $validation;

    public function __construct()
    {
        $this->db         = \Config\Database::connect();
        $this->builder    = $this->db->table('tb_about');
    }
    public function index()
    {
        $about = new AboutModel();
        $data_about = $about->findall();
        $data['list_about'] = $data_about;
        $data['title'] = "About";
        $data['activeMenu'] = "about";
        echo view('cms/admin_header', $data);
        echo view('cms/about_view', $data);
        echo view('cms/admin_footer');
    }

    public function upload()
    {
        $data['title'] = "Upload"; 
        $data['activeMenu'] = "about";
        echo view('cms/admin_header', $data);
        echo view('cms/about_upload');
        echo view('cms/admin_footer');
    }

    public function save()
    {
        // ambil foto
        $image = $this->request->getFile('foto');
        
        $about      = new AboutModel();
        $id         = $this->request->getPost('id');
        $visi       = $this->request->getPost('visi');        
        $deskripsi  = $this->request->getPost('deskripsi');
        
        $data = [
            'visi'      => $visi,
            'deskripsi' => $deskripsi,
        ];
        
        if(!empty($image) && !empty($image->getName())){
            $namaimage = $image->getName();
            $image->move('img/about');
            $data['foto'] = $namaimage;
        }
        if (empty($id)){
            // Buat data baru jika $id kosong
            if ($about->save($data)) {
                session()->getFlashdata('pesan', 'Data Berhasil Di Upload');
                } else {
                    die("gagal");
                    }
                    
        } else {
            // Perbarui data jika $id tidak kosong
            if ($about->where('id', $id)->set($data)->update()) {
                session()->getFlashdata('pesan', 'Data Berhasil Di Simpan');
            } else {
                die("gagal");
            }
            
        }
        return redirect()->to(base_url('cms/about'));
    }

    public function delete($id = 0)
    {            
        $about = new AboutModel();
        if (!empty($id)) {
            if ($this->builder->delete(['id' => $id]));
            session()->setFlashdata('alert', 'Data Berhasil Di Hapus');
        }
            return redirect()->to('cms/about');
    }

    public function update($id = 0) 
    {
        $about = new AboutModel();
        $data_about = $about->findAll();
        $data['list_about'] = $data_about;
        $data['title'] = "Update"; 
        $data['activeMenu'] = "about";

        $this->builder->select('id, visi, foto, deskripsi');
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        $data['about'] = $query->getRow();
        
        echo view('cms/admin_header', $data);
        echo view('cms/about_update', $data);
        echo view('cms/admin_footer');
        
    }

    public function update_status($id)
    {
        
        $status = $this->request->getPost('status');
        $newStatus = ($status == 1) ? 0 : 1;
        $about = new AboutModel(); 
        $about->update($id, ['status' => $newStatus]);
        
        return redirect()->to('cms/about');
    }
}