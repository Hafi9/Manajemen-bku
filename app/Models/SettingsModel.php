<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pembina', 'nip_pembina', 'nama_pembina_utama_muda', 'nip_pembina_utama_muda', 'nama_penata_muda', 'nip_penata_muda', 'nama_bendahara', 'nip_bendahara'];

    
    // Menampilkan semua data kas
    public function getSettings()
    {
        return $this->db->table($this->table)
        ->select("*")
        ->get()
        ->getRowArray();

    }

    public function updateSettings($id, $data)
    {
        return $this->update($id, $data);
    }

    // public function updateSettings($data){
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('settings');
        
    //     $builder->replace($data);
    //     return 1;
    // }

}
