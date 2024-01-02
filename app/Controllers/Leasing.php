<?php

namespace App\Controllers;
use App\Models\LeasingModel;

class Leasing extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tb_leasing');
    }
    public function index()
    {
        $leasing = new LeasingModel();
        $data_leasing = $leasing->findall();
        $data['list_leasing'] = $data_leasing;
        $data['title'] = "Leasing";
        $data['activeMenu'] = "leasing";

        echo view('cms/admin_header', $data);
        echo view('cms/leasing_view', $data);
        echo view('cms/admin_footer');
    }

    public function save()
    {
        $leasing    = new LeasingModel();
        $nama       = $this->request->getPost('nama');
        $nohp       = $this->request->getPost('nohp');
        $email       = $this->request->getPost('email');

        $data = [
            'nama' => $nama,
            'nohp'  => $nohp,
            'email'   => $email
        ];

        $leasing->save($data);
        $success = true;

        if ($success) {
            session()->setFlashdata('success_message', 'Leasing berhasil dikirim!');
        }

        $whatsappNumber = '6285156127543';
        $whatsappMessage = 'Halo, saya tertarik dengan layanan leasing. Nama: ' . $nama . ', No. HP: ' . $nohp;

        // Buat tautan WhatsApp
        $whatsappLink = 'https://api.whatsapp.com/send?phone=' . $whatsappNumber . '&text=' . urlencode($whatsappMessage);

        // Arahkan pengguna ke tautan WhatsApp
        return redirect()->to($whatsappLink);
    }

    public function delete($id = 0)
    {
        $leasing = new LeasingModel();
        if (!empty($id)) {
            if ($this->builder->delete(['id' => $id]));
            session()->setFlashdata('alert', 'Data Berhasil Di Hapus');
        }
            return redirect()->to('cms/leasing');
    }
}