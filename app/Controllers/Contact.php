<?php

namespace App\Controllers;
use App\Models\ContactModel;
use App\Models\InfoModel;

class Contact extends BaseController
{

    protected $db, $builder, $builderInfo;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tb_contact');
        $this->builderInfo = $this->db->table('tb_contactinfo');
    }
    public function index($id=0)
    {
        $contact = new ContactModel();
        $data_contact = $contact->findall();
        $data['list_contact'] = $data_contact;
        $data['title'] = "Contact"; 
        $data['activeMenu'] = "contact";

        $info = new InfoModel();
        $data_info = $info->findall();
        $data['list_info'] = $data_info;
        $this->builderInfo->select('alamat, email, telp, map');
        $this->builderInfo->where('id', $id);
        $query = $this->builder->get();
        $data['info'] = $query->getRow();

        echo view('cms/admin_header', $data);
        echo view('cms/contact_view', $data);
        echo view('cms/admin_footer');
    }

    public function save()
    {   
        $contact    = new ContactModel();
        $nama       = $this->request->getPost('nama');
        $email      = $this->request->getPost('email');        
        $subjek     = $this->request->getPost('subjek');
        $pesan      = $this->request->getPost('pesan');
        
        $data = [
            'nama'      => $nama,
            'email'     => $email,
            'subjek'    => $subjek,
            'pesan'     => $pesan,
        ];
        $contact->save($data);
        $success = true;

        if ($success) {
            session()->setFlashdata('success_message', 'Pesan Anda berhasil dikirim!');
        }
        return redirect()->to(base_url('/contact'));
    }

    public function save2()
    {
        $info      = new InfoModel();
        $alamat    = $this->request->getPost('alamat');
        $email     = $this->request->getPost('email');
        $telp      = $this->request->getPost('telp');        
        $map       = $this->request->getPost('map');
        $id        = $this->request->getPost('id');
        
        $data = [
            'alamat'    => $alamat,
            'email'     => $email,
            'telp'      => $telp,
            'map'       => $map,
        ];

        if (empty($id)){
            // Buat data baru jika $id kosong
            if ($info->save($data)) {
                } else {
                    die("gagal");
                    }
                    
        } else {
            // Perbarui data jika $id tidak kosong
            if ($info->where('id', $id)->set($data)->update()) {
            } else {
                die("gagal");
            }
        }
        return redirect()->to(base_url('cms/contact/'));
    }

    public function delete($id = 0)
    {            
        $contact = new ContactModel();
        if (!empty($id)) {
            if ($this->builder->delete(['id' => $id]));
            session()->setFlashdata('alert', 'Data Berhasil Di Hapus');
        }   else {
            session()->setFlashdata('alert', 'Data Gagal Di Hapus');
        }
            return redirect()->to('cms/contact');
    }
}