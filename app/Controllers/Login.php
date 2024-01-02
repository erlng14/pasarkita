<?php 

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
      
       if (logged_in()) {
        return redirect()->to('cms/dashboard');
       } 
       else {
        $data['title'] = "Login";
        $data['activeMenu'] = "login";
         echo view('cms/login_view', $data);
         return redirect()->to('cms/dashboard');
       }
    }
}