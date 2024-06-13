<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Session\Session;

class PerjalananDinasModel extends Model
{
    protected $table = 'perjalanan_dinas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'pelaksana_id',
        'bagian_dprd_id',
        'bbm_id',
        'status',
        'biaya',
        'anggota',
        'transportasi',
        'keterangan',
        'kode_rekening',
        'user_input',
        'user_edit'
        // Kolom lain yang diperlukan
    ];

    public function getPerjalananDinasData()
    {
        $session=\Config\Services::session();
        // dd($session->get());
        return $this->db->table($this->table)
            ->select('perjalanan_dinas.*, nama_pelaksana.nama_pelaksana, bbm.provinsi, bbm.kota, laporan_perjalanan_dinas.status')
            ->join('nama_pelaksana', 'nama_pelaksana.id = perjalanan_dinas.pelaksana_id')
            ->join('bbm', 'bbm.id = perjalanan_dinas.bbm_id')
            ->join('laporan_perjalanan_dinas', 'perjalanan_dinas.id = laporan_perjalanan_dinas.perdin_id', 'left')
            ->where('perjalanan_dinas.bagian_dprd_id', $session->get('bagian_id'))
            ->get()
            ->getResultArray();
    }

    public function getDetailPerjalananDinasData($id)
    {

        return $this->db->table($this->table)
            ->select('perjalanan_dinas.*, nama_pelaksana.nama_pelaksana, bbm.provinsi, bbm.kota')
            ->join('nama_pelaksana', 'nama_pelaksana.id = perjalanan_dinas.pelaksana_id')
            ->join('bbm', 'bbm.id = perjalanan_dinas.bbm_id')
            ->where('perjalanan_dinas.id', $id)
            ->get()
            ->getRowArray();
    }
}
