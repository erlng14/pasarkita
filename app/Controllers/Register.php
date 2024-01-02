<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        return view('cms/register_view');
        return view('cms/userlist');
        return redirect()->to('cms/userlist');
    }
}