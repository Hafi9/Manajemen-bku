<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table = 'user';
    
    public function userIDD($data)
    {
        return $this->db->table($this->table)
            ->select('user.id as user_id, nama_pelaksana.id as napel_id, nama_pelaksana.bagian_dprd_id as bagian_id')
            ->join('nama_pelaksana', "user.id=nama_pelaksana.user_id")
            ->get()
            ->getRowArray();
    }
}