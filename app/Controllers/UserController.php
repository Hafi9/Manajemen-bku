<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('user/index', $data);
    }

    public function create()
    {
        $userModel = new UserModel();
        $roleModel = new RoleModel(); // Menggunakan RoleModel dari namespace App\Models

        // Mendapatkan daftar peran untuk ditampilkan di form create
        $roles = $roleModel->getRole();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'group_id' => 'required',
            'username' => 'required|is_unique[users.username]',
            'email' => 'required|valid_email',
            'password' => 'required'
        ])) {
            $userModel->createUser([
                'group_id' => $this->request->getPost('group_id'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password_hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ]);
            return redirect()->to('/user');
        }

        // Menyiapkan data roles untuk dikirim ke view
        $data['roles'] = $roles;

        return view('user/create', $data);
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $roleModel = new RoleModel();

        $user = $userModel->ambilDetailJoinAuthGroupsUsers($id);
        $role = $roleModel->getRole();

        if ($this->request->getMethod() === 'post') {
            $data_user = [
                "username"  => $this->request->getPost("username"),
                "email"     => $this->request->getPost("email"),
                "user_id"   => $id
            ];

            ($this->request->getPost("password")) ? $data_user["password_hash"] = password_hash($this->request->getPost("password"), PASSWORD_DEFAULT) : "";
 
            $data_auths_groups = [
                "group_id"  => $this->request->getPost("group_id"),
                "user_id"   => $id
            ];

            $userModel->updateUserDanAuthGroupsUsers($data_user, $data_auths_groups);
            return redirect()->to('/user');
        }

        return view('user/edit', ['user' => $user, 'role'=> $role]);
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->deleteUser($id);
        return redirect()->to('/user');
    }
}
