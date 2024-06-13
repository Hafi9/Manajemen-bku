<?php

namespace App\Models;

use CodeIgniter\Model;

class PengirimanUangModel extends Model
{
    private $otherdb;
    public function __construct()
    {
        parent::__construct();
        $this->otherdb = \Config\Database::connect();
    }

    protected $table = 'pengiriman_uang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kas_id', 'bagian_dprd_id', 'jumlah_uang', 'tanggal_pengiriman', 'keterangan', 'user_input', 'user_edit'];

    public function insertPengirimanUang($data)
    {
        $builder = $this->otherdb->table("kas");

        $data_kas = [

            "kredit"            => $data["jumlah_uang"],
            "bagian_dprd_id"    => $data["bagian_dprd_id"],
            "keterangan"        => "Anggaran masuk",
            "rekening_bank"     => 0,

        ];

        $builder->insert($data_kas);
        $last_id = $this->otherdb->insertID();

        $data["kas_id"] = $last_id;

        $this->insert($data);
        return 1;
    }

    public function getPengirimanUangById($id)
    {
        return $this->find($id);
    }
}
