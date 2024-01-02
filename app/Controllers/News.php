<?php

namespace App\Controllers;
use App\Models\NewsModel;

class News extends BaseController
{ 
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tb_newslatter');
    }

    public function index()
    {
        $news = new NewsModel();
        $data_news = $news->findall();
        $data['list_news'] = $data_news;
        $data['title'] = "Newslatter";
        $data['activeMenu'] = "Newslatter";
        echo view('cms/admin_header', $data);
        echo view('cms/news_view', $data);
        echo view('cms/admin_footer');
    }

    public function save()
    {   
        $news    = new NewsModel();
        $email   = $this->request->getPost('email');        
        
        $data = [
            'email'  => $email,
        ];
        $news->save($data);
        $success = true;

        if ($success) {
            session()->setFlashdata('pesan_news', 'Pesan Anda berhasil dikirim!');
        }
        return redirect()->back();
    }

    public function delete($id = 0)
    {            
        $news = new NewsModel();
        if (!empty($id)) {
            if ($this->builder->delete(['id' => $id]));
            session()->setFlashdata('alert', 'Data Berhasil Di Hapus');
        }   else {
            session()->setFlashdata('alert', 'Data Gagal Di Hapus');
        }
            return redirect()->to('cms/news');
    }
}
