<?php

namespace App\Controllers;
use Myth\Auth\Models\UserModel;

class Userlist extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index() 
    {
        $data['title'] = "User List";
        $data['activeMenu'] = "userlist";
        
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();

        $totalUsers = count($data['users']);
        $data['totalUsers'] = $totalUsers;

        echo view('cms/admin_header', $data);
        echo view('cms/userlist_view', $data);
        echo view('cms/admin_footer');
    }

    public function detail($id = 0) 
    {
        $data['title'] = "Detail";
        $data['activeMenu'] = "userlist";

        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data['user'] = $query->getRow();
        if (empty($data['user'])) {
            return redirect()->to('cms/userlist');
        }
        echo view('cms/admin_header', $data);
        echo view('cms/userlist_detail', $data);
        echo view('cms/admin_footer');
    }
    public function delete($id = 0)
    {
        $user = new UserModel();                
        if (!empty($id)) {
            if ($this->builder->delete(['id' => $id]))

            return redirect()->to('cms/userlist');
        }
    }
}
