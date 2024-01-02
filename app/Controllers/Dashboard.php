<?php

namespace App\Controllers;
use App\Models\AcaraModel;
use App\Models\ContactModel;
use App\Models\CTAModel;
use App\Models\VisitorModel;
use Myth\Auth\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $acara   = new AcaraModel();
        $user    = new UserModel();
        $contact = new ContactModel();
        $cta     = new CTAModel();
        $VisitorModel = new VisitorModel();

        $data['title']          = "Dashboard";
        $data['activeMenu']     = "dashboard";
        $data['totalAcara']     = $acara->countAll();
        $data['totalUsers']     = $user->countAll();
        $data['totalContact']   = $contact->countAll();
        $data['totalClick']     = $cta->selectSum('click')->get()->getRow()->click;
        $data['userAgentData']  = $VisitorModel->findAll();

        echo view('cms/admin_header', $data);
        echo view('cms/dashboard_view', $data);
        echo view('cms/admin_footer');
    }
}
