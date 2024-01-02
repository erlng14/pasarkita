<?php 

namespace App\Controllers;
use App\Models\VisitorModel;

class UserAgent extends BaseController
{
    public function getVisitorData()
    {
        $VisitorModel = new VisitorModel;
        $data = $VisitorModel->findAll();
        /* ->select('platform, COUNT(*) as count')
        ->groupBy('platform')
        ->findAll(); */

        return $data;
    }


}
