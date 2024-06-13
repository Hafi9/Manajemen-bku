<?php

namespace App\Models;

use CodeIgniter\Model;

class KasModel extends Model
{
    protected $table = 'kas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['perdin_id', 'keterangan', 'debet', 'kredit', 'bagian_dprd_id'];

    
    // Menampilkan semua data kas
    public function getAllKas()
    {
        return $this->findAll();
    }

    // Ambil berdasarkan query builder
    public function ambilSemuaCustom(){

        if(isset($_GET["bagian"]) && !empty($_GET["bagian"])){

            return $this->db->table($this->table)
            ->select('*')
            ->where('bagian_dprd_id',$_GET["bagian"])
            ->get()
            ->getResultArray();

            
        }else{

            return $this->findAll();
        }

    }

    // // Menambah data bbm baru
    // public function insertBbm($data)
    // {
    //     return $this->insert($data);
    // }

    // // Mendapatkan detail data bbm berdasarkan ID
    // public function getBbmById($id)
    // {
    //     return $this->find($id);
    // }

    // // Mengupdate data bbm berdasarkan ID
    // public function updateBbm($id, $data)
    // {
    //     return $this->update($id, $data);
    // }

    // // Menghapus data bbm berdasarkan ID
    // public function deleteBbm($id)
    // {
    //     return $this->delete($id);
    // }
}
