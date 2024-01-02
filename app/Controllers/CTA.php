<?php

namespace App\Controllers;
use App\Models\CTAModel;
use App\Models\VisitorModel;

class CTA extends BaseController
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db           = \Config\Database::connect();
        $this->builder      = $this->db->table('tb_cta');
    }

    public function index($id = 0)
    {
        $cta = new CTAModel();
        $data_cta = $cta->findall();
        $data['list_cta'] = $data_cta;
        $data['title'] = "CTA";
        $data['activeMenu'] = "cta";

        $this->builder->select('judul, link, deskripsi, click');
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        $data['cta'] = $query->getRow();
        echo view('cms/admin_header', $data);
        echo view('cms/cta_view', $data);
        echo view('cms/admin_footer');
    }

    public function save()
    {
        $cta        = new CTAModel();
        $id         = $this->request->getPost('id');
        $link       = $this->request->getPost('link');
        $judul      = $this->request->getPost('judul');        
        $deskripsi  = $this->request->getPost('deskripsi'); 
        
        $data = [
            'judul'     => $judul,
            'deskripsi' => $deskripsi,
            'link'      => $link,            
        ];

        if (empty($id)){
            // Buat data baru jika $id kosong
            $data['click'] = 0;
            if ($cta->save($data)) {
                } else {
                    die("gagal");
                    }
                    
        } else {
            // Perbarui data jika $id tidak kosong
            $data['id'] = $id;
            // dd($data);
            if ($cta->save($data)){
            } else {
                die("gagal");
            }
        }

        return redirect()->to(base_url('cms/cta'));
    }

    public function click($id)
    {
    $cta = new CTAModel();
    $cta->where('id', $id)->set('click', 'click+1', false)->update();
    $totalClick = $cta->selectSum('click')->get()->getRow()->click;
    $data['totalClick'] = $totalClick;

    return redirect()->to($cta->find($id)['link']);
    }
}