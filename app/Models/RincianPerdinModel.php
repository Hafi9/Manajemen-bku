<?php

namespace App\Models;

use CodeIgniter\Model;

class RincianPerdinModel extends Model
{
    protected $table = 'rincian_perdin';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'perdin_id',
        'user_id',
        'uang_harian',
        'uang_representasi',
        'akomodasi',
        'tol',
        'bbm',
        'judul_rincian',
        'rincian_biaya',
        'jumlah_total',
        'keterangan',
        'tgl_berangkat',
        'tgl_kembali'
    ];
    
    protected $useTimestamps = true; // Menggunakan timestamps
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Metode lain sesuai kebutuhan 
    // public function getAllRincian()
    // {
    //     return $this->findAll();
    // }

    public function getAllRincian($id_perdin = ""){

        $query = $this->db->table($this->table);
        $query->select("rincian_perdin.tgl_berangkat, rincian_perdin.tgl_kembali, rincian_perdin.id, rincian_perdin.judul_rincian, rincian_perdin.uang_harian, rincian_perdin.uang_representasi, rincian_perdin.akomodasi, rincian_perdin.tol, rincian_perdin.bbm, rincian_perdin.jumlah_total, rincian_perdin.keterangan, bbm.provinsi, bbm.kota, nama_pelaksana.nama_pelaksana, nama_pelaksana.jabatan, nama_pelaksana.bagian_dprd_id");
        $query->join("nama_pelaksana", "rincian_perdin.user_id = nama_pelaksana.user_id", "inner");
        $query->join("perjalanan_dinas", "rincian_perdin.perdin_id = perjalanan_dinas.id", "inner");
        $query->join("bbm", "perjalanan_dinas.bbm_id = bbm.id", "inner");

        if(isset($_GET["data"]) || $id_perdin){

            $perdin_id = (isset($_GET["data"])) ? $_GET["data"] : $id_perdin;
            $query->where("rincian_perdin.perdin_id", $perdin_id);

        }
        
        $result = $query->get()->getResultArray();
        return $result;
    }

    public function getAllKwitansi($id_rincian_perdin = ""){

        $query = $this->db->table($this->table);
        $query->select("nama_pelaksana.nik_nip, perjalanan_dinas.transportasi, perjalanan_dinas.keterangan as untuk_pembayaran, perjalanan_dinas.kode_rekening, rincian_perdin.tgl_berangkat, rincian_perdin.tgl_kembali, rincian_perdin.judul_rincian, rincian_perdin.uang_harian, rincian_perdin.uang_representasi, rincian_perdin.akomodasi, rincian_perdin.tol, rincian_perdin.bbm, rincian_perdin.jumlah_total, rincian_perdin.keterangan, bbm.provinsi, bbm.kota, nama_pelaksana.nama_pelaksana, nama_pelaksana.jabatan");
        $query->join("nama_pelaksana", "rincian_perdin.user_id = nama_pelaksana.user_id", "inner");
        $query->join("perjalanan_dinas", "rincian_perdin.perdin_id = perjalanan_dinas.id", "inner");
        $query->join("bbm", "perjalanan_dinas.bbm_id = bbm.id", "inner");

        if($id_rincian_perdin){

            $query->where("rincian_perdin.id", $id_rincian_perdin);

        }
        
        $result = $query->get()->getRowArray();
        return $result;
    }

}
