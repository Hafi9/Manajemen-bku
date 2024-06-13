<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanPerjalananDinasModel extends Model
{
    protected $table = 'laporan_perjalanan_dinas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['perdin_id', 'sp', 'sppd', 'lp', 'kwitansi', 'laporan_pdf', 'status'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function ambilSemuaJoinPerdinBbmPelaksana()
    {

        return $this->db->table($this->table)
            ->select('laporan_perjalanan_dinas.*, nama_pelaksana.nama_pelaksana, bbm.provinsi, bbm.kota')
            ->join('perjalanan_dinas', 'laporan_perjalanan_dinas.perdin_id = perjalanan_dinas.id')
            ->join('nama_pelaksana', 'perjalanan_dinas.pelaksana_id = nama_pelaksana.id')
            ->join('bbm', 'perjalanan_dinas.bbm_id = bbm.id')
            ->get()
            ->getResultArray();
    }

    public function ambilSemuaJoinPerdinBbmPelaksanaDetail($id)
    {

        return $this->db->table($this->table)
            ->select('laporan_perjalanan_dinas.*, nama_pelaksana.nama_pelaksana, bbm.provinsi, bbm.kota, perjalanan_dinas.biaya, perjalanan_dinas.anggota, perjalanan_dinas.bagian_dprd_id')
            ->join('perjalanan_dinas', 'laporan_perjalanan_dinas.perdin_id = perjalanan_dinas.id')
            ->join('nama_pelaksana', 'perjalanan_dinas.pelaksana_id = nama_pelaksana.id')
            ->join('bbm', 'perjalanan_dinas.bbm_id = bbm.id')
            ->where("laporan_perjalanan_dinas.id", $id)
            ->get()
            ->getRowArray();
    }

    public function ambilLaporanPerdinBerdasarakanId($id){

        return $this->db->table($this->table)
            ->select('laporan_perjalanan_dinas.*')
            ->where("laporan_perjalanan_dinas.id", $id)
            ->get()
            ->getRowArray();

    }

    public function getLaporanStatus($status)
    {
        return $this->db->table($this->table)
            ->select('COUNT(laporan_perjalanan_dinas.id) as jum')
            ->where("laporan_perjalanan_dinas.status", $status)
            ->get()
            ->getRowArray();
    }

    // public function getLaporanDisetujui()
    // {
    //     return $this->db->table($this->table)
    //         ->select('laporan_perjalanan_dinas.*')
    //         ->where("laporan_perjalanan_dinas.status", 2)
    //         ->get()
    //         ->getRowArray();
    // }

    public function getLaporans()
    {
        return $this->findAll();
    }

    public function saveLaporan($data)
    {
        return $this->insert($data);
    }

    public function findLaporan($id)
    {
        return $this->find($id);
    }

    public function updateLaporan($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteLaporan($id)
    {
        return $this->delete($id);
    }
}
