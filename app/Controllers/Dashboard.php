<?php

namespace App\Controllers;
use App\Models\namaPelaksanaModel;
use App\Models\laporanPerjalananDinasModel;

class Dashboard extends BaseController
{
    public function index(): string
    {

        $session=\Config\Services::session();

        $namaPelaksana = new NamaPelaksanaModel();
        $laporanPerjalananDinas = new LaporanPerjalananDinasModel();

        $data = [

            "jumlahNamaPelaksana" => count($namaPelaksana->getAllNamaPelaksana()),
            "jumlahLaporanSetujui"=> $laporanPerjalananDinas->getLaporanStatus(2)["jum"],
            "jumlahLaporanTolak"=> $laporanPerjalananDinas->getLaporanStatus(3)["jum"],
            "jumlahLaporanPending"=> $laporanPerjalananDinas->getLaporanStatus(1)["jum"],

        ];

        return view('dashboard\index', $data);
    }
}
