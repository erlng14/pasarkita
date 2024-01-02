<?php

namespace App\Controllers;
use App\Models\HomepageModel;
use Intervention\Image\ImageManagerStatic as Image;


class Homepage extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('tb_homepage');
    }
    public function index()
    {
        $home = new HomepageModel();
        $data_homepage = $home->findall();
        $data['list_home'] = $data_homepage;
        $data['title'] = "Homepage";
        $data['activeMenu'] = "homepage";
        echo view('cms/admin_header', $data);
        echo view('cms/homepage_view', $data);
        echo view('cms/admin_footer');
    }

    public function upload()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        $data['title'] = "Upload"; 
        $data['activeMenu'] = "homepage";
        echo view('cms/admin_header', $data);
        echo view('cms/homepage_upload');
        echo view('cms/admin_footer');
    }

    public function save()
    {
        // Validation
        $rules = [
            'judul'       => 'required',
            'background'  => 'required',
            'tagline'     => 'required'
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('cms/homepage/upload')->withInput()->with('errors', $this->validator->getErrors());
        }

        $image = $this->request->getFile('background');

        $home       = new HomepageModel();
        $id         = $this->request->getPost('id');
        $judul      = $this->request->getPost('judul');        
        $tagline    = $this->request->getPost('tagline');

        $data = [
            'id'            => $id,
            'judul'         => $judul,
            'tagline'       => $tagline,
        ];
        if(!empty($image) && !empty($image->getName())){
            $namaimage = $image->getName();
            $image->move('img/background');
            $data['background'] = $namaimage;
        }
        if (empty($id)){
            // Buat data baru jika $id kosong
            if ($home->save($data)) {
                session()->getFlashdata('pesan', 'Data Berhasil Di Upload');
                } else {
                    die("gagal");
                    }
                    
        } else {
            // Perbarui data jika $id tidak kosong
            if ($home->where('id', $id)->set($data)->update()) {
                session()->getFlashdata('pesan', 'Data Berhasil Di Simpan');
            } else {
                die("gagal");
            }
            
        }
        return redirect()->to('cms/homepage');
    }

    public function delete($id = 0)
    {            
        $home = new HomepageModel();
        if (!empty($id)) {
            if ($this->builder->delete(['id' => $id]));
            session()->setFlashdata('alert', 'Data Berhasil Di Hapus');
        }
            return redirect()->to('cms/homepage');
    }

    public function update($id = 0) 
    {
        $home = new HomepageModel();
        $data_home = $home->findAll();
        $data['list_home'] = $data_home;
        $data['title'] = "Update"; 
        $data['activeMenu'] = "home";

        $this->builder->select('id, judul, tagline, background');
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        $data['home'] = $query->getRow();
        
        echo view('cms/admin_header', $data);
        echo view('cms/homepage_update', $data);
        echo view('cms/admin_footer');
        
    }

    public function update_status($id)
    {
        
        $status = $this->request->getPost('status');
        $newStatus = ($status == 1) ? 0 : 1;
        $home = new HomepageModel();
        $home->update($id, ['status' => $newStatus]);
        
        return redirect()->to('cms/homepage');
    }

}
