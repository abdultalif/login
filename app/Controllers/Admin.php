<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $user = new \Myth\Auth\Models\UserModel();
        // Join Table
        // $db = \Config\Database::connect();
        // $builder = $db->table('users');
        // $builder = select('users.id as userid', 'username', 'email', 'name');
        // $builder = join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $builder = join('auth_groups_users', 'auth_groups_users.id = users.userid');

        $data = [
            'title' => 'User List',
            'user' => $user->findAll()
        ];
        return view('admin/index', $data);
    }
}
