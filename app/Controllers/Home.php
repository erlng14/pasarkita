<?php

namespace App\Controllers;
use App\Models\AcaraModel;
use App\Models\CTAModel;
use App\Models\HomepageModel;
use App\Models\AboutModel;
use App\Models\ContactModel;
use App\Models\InfoModel;
use App\Models\VisitorModel;

class Home extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tb_acara');
    }

    public function index()
    {
        // HOMEPAGE
        $home = new HomepageModel();
        $data_home = $home->where('status', 1)->findall();
        $data['title'] = "Homepage";
        $data['list_home'] = $data_home;

        // ABOUT
        $about = new AboutModel();
        $data_about = $about->where('status', 1)->findall();
        $data['title'] = "About";
        $data['list_about'] = $data_about;

        // CTA
        $cta = new CTAModel();
        $data_cta = $cta->where('status', 1)->findall();
        $data['title'] = "CTA";
        $data['list_cta'] = $data_cta;

        // ACARA
        $acara = new AcaraModel();
        $data_acara = $acara->where('status', 1)->findall();
        $data['title'] = "Acara";
        $data['list_acara'] = $data_acara;

        // DETAIL
        $acara = new AcaraModel();
        $data_acara = $acara->where('status', 1)->findall();
        $data['title'] = "Detail";
        $data['list_acara'] = $data_acara;

        // CONTACT INFO
        $info = new InfoModel();
        $data_info = $info->findall();
        $data['title'] = "Contact";
        $data['list_info'] = $data_info;

        // CONTACT
        $contact = new ContactModel();
        $data_contact = $contact->findall();
        $data['title'] = "Contact";
        $data['list_contact'] = $data_contact;

        $VisitorModel = new VisitorModel;
        $VisitorModel->updateVisitor($this->request);

        echo view('web_header', $data);
        echo view('index_view', $data);
        echo view('web_footer');
    }

    public function homepage()
    {
        $data['title'] = "Homepage";
        echo view('web_header');
        echo view('homepage_view');
        echo view('web_footer');
    }

    public function about()
    {
        $data['title'] = "About";
        $about = new AboutModel();
        $data_about = $about->where('status', 1)->findall();
        $data['list_about'] = $data_about;
        echo view('web_header');
        echo view('web_about', $data);
        echo view('web_footer');
    }

    public function acara()
    {
        $data['title'] = "Acara";
        $acara = new AcaraModel();
        $data_acara = $acara->where('status', 1)->findall();
        $data['list_acara'] = $data_acara;
        echo view('web_header');
        echo view('web_acara', $data);
        echo view('web_footer');
    }

    public function contact()
    {
        $data['title'] = 'Contact';
        $info = new InfoModel();
        $data_info = $info->findall();
        $data['list_info'] = $data_info;
        echo view('web_header', $data);
        echo view('web_contact', $data);
        echo view('web_footer');
    }

    public function leasing()
    {
        $data['title'] = 'Leasing';
        echo view('web_header');
        echo view('web_leasing');
        echo view('web_footer');
    }

    public function detail($slug = null)
    {   
        $acara = new AcaraModel();
        $data_acara = $acara->where('status', 1)->findall();
        $data['list_acara'] = $data_acara;
        $data['active'] = 'detail';
        
        $this->builder->where('slug', $slug);
        $query = $this->builder->get();
        $data['acara'] = $query->getRow();

        // Ambil slug dari data acara yang sedang ditampilkan
        $slug = $data['acara']->slug;

        // Mendapatkan indeks acara yang sedang ditampilkan
        $current_index = array_search($slug, array_column($data['list_acara'], 'slug'));

        // Menghitung jumlah acara
        $total_acara = count($data['list_acara']);

        // Membuat link untuk acara sebelumnya (previous)
        $prev_acara = ($current_index > 0) ? $data['list_acara'][$current_index - 1] : null;

        // Membuat link untuk acara setelahnya (next)
        $next_acara = ($current_index < $total_acara - 1) ? $data['list_acara'][$current_index + 1] : null;

        $data['prev_acara'] = $prev_acara;
        $data['next_acara'] = $next_acara;

        echo view('web_header', $data);
        echo view('web_acara_detail', $data);
        echo view('web_footer');
    }
}
