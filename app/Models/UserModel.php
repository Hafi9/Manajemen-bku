<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password_hash', 'email', 'id'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function createUser($data)
    {

        $db      = \Config\Database::connect();
        $builders = $db->table('auth_groups_users');

        $data_groups = [
            "group_id"  => $data["group_id"]
        ];

        unset($data["group_id"]);

        $this->insert($data);
        $last_id = $this->getInsertId();

        $data_groups["user_id"] = $last_id;

       return $builders->insert($data_groups);
    }

    public function ambilDetailJoinAuthGroupsUsers($id){

        return $this->select("auth_groups_users.group_id, users.*")
        ->join("auth_groups_users", "users.id = auth_groups_users.user_id")
        ->where("users.id", $id)
        ->get()
        ->getRowArray();

    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }
    
    public function getUsersWithUserRole()
    {
        return $this->select('users.id, users.username')
                    ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
                    ->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id')
                    ->where('auth_groups.name', 'user')
                    ->findAll();
    }

    public function updateUserDanAuthGroupsUsers($dataUser, $dataAuthGroup){

        // var_dump($dataUser);
        // var_dump($dataAuthGroup);
        // die;

        $db      = \Config\Database::connect();
        $builders = $db->table('auth_groups_users');

        $this->where("id", $dataUser["user_id"]);
        $id = $dataUser["user_id"];
        unset($dataUser["user_id"]);
        $this->update($id, $dataUser);

        $builders->where("user_id", $dataAuthGroup["user_id"]);
        unset($dataAuthGroup["user_id"]);
        $builders->update($dataAuthGroup);

        return 1;

    }

}
