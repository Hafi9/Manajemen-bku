<?php

namespace App\Controllers;

use App\Models\RincianPerdinModel;
use App\Models\PerjalananDinasModel; // Model Perjalanan Dinas jika digunakan
use App\Models\NamaPelaksanaModel;
use App\Models\BagianDPRDModel;
use App\Models\SettingsModel;
use CodeIgniter\CodeIgniter;

require '../vendor/autoload.php';

use Dompdf\Dompdf;

class RincianPerdinController extends BaseController
{
    public function index()
    {
        $rincianPerdinModel = new RincianPerdinModel();
        $data['rincianPerdin'] = $rincianPerdinModel->getAllRincian();

        return view('rincian_perdin/index', $data);
    }

    public function create($id="")
    {
        $data = [];

        // ambil user berdasarkan bagian
        $namaPelaksanaModel     = new NamaPelaksanaModel();
        $data['namaPelaksana']  = $namaPelaksanaModel->ambilPelaksanaBerdasarkanBagian($id);
        
        // Jika diperlukan, gunakan model perjalanan dinas
        $perjalananDinasModel = new PerjalananDinasModel();
        $data['perjalananDinas'] = $perjalananDinasModel->findAll();
        $data['perdin_id']  = $id;

        if ($this->request->getMethod() === 'post') {
            // Proses perhitungan nilai
            $uangHarian = $this->request->getPost('uang_harian');
            $uangRepresentasi = $this->request->getPost('uang_representasi');
            $bbm = $this->request->getPost('bbm');
            $tol = $this->request->getPost('tol');
            $akomodasi = $this->request->getPost('akomodasi');
            $jumlahHariHarian = $this->request->getPost('jumlah_hari_harian');
            $jumlahMalamHotel = $this->request->getPost('jumlah_malam_hotel');
        
            // Hitung total biaya dan jumlah total
            $totalBiaya = $uangHarian + $uangRepresentasi + $bbm + $tol + $akomodasi;
            $jumlahTotal = ($uangHarian * $jumlahHariHarian) + ($uangRepresentasi * $jumlahHariHarian) + ($akomodasi * $jumlahMalamHotel) + $tol + $bbm ;
        
            // Set nilai untuk disimpan ke dalam database
            $data = [
                'user_id'  => $this->request->getPost("user_id"),
                'perdin_id' => $this->request->getPost('perdin_id'),
                'uang_harian' => $this->request->getPost('uang_harian'),
                'uang_representasi' => $this->request->getPost('uang_representasi'),
                'akomodasi' => $this->request->getPost('akomodasi'),
                'tol' => $this->request->getPost('tol'),
                'bbm' => $this->request->getPost('bbm'),
                'judul_rincian' => $this->request->getPost('judul_rincian'),
                'biaya'         => $this->request->getPost('biaya'),
                'rincian_biaya' => $totalBiaya,
                'jumlah_total' => $jumlahTotal,
                'keterangan' => "$jumlahHariHarian Hari, $jumlahMalamHotel Malam",
                'tgl_berangkat'         => $this->request->getPost('tgl_berangkat'),
                'tgl_kembali'         => $this->request->getPost('tgl_kembali')
            ];

            $perdin_id = $this->request->getPost("perdin_id");
        
            // Simpan data ke dalam database
            $rincianPerdinModel = new RincianPerdinModel();
            $rincianPerdinModel->save($data);   

            // Simpan juga total biaya ke dalam tabel perjalanan_dinas
            $perjalananDinasModel = new PerjalananDinasModel();
            $perjalananDinas = $perjalananDinasModel->find($data['perdin_id']);

            // Update kolom biaya di tabel perjalanan_dinas
            $perjalananDinas['biaya'] += $jumlahTotal;
            $perjalananDinasModel->update($data['perdin_id'], $perjalananDinas);
        
            return redirect()->to("/rincian_perdin?data=$perdin_id");
        }
        
        $data['perdin_id']=$id;
        return view('rincian_perdin/create', $data);
    }

    public function pdf($id_perdin, $bagian_dprd_id){


        $rincianPerdinModel = new rincianPerdinModel();
        $bagianDprdModel = new bagianDprdModel();

        $data = $rincianPerdinModel->getAllRincian($id_perdin);
        $settings = $bagianDprdModel->getBagianDPRDByID($bagian_dprd_id);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('cetak/kwitansi', ["title" => "Laporan perjalanan dinas", "data" => $data, "settings" => $settings]));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("", array("Attachment" => false));

        exit(0);

    }

    public function pdfsingle($id_rincian_perdin, $bagian_dprd_id){


        $rincianPerdinModel = new rincianPerdinModel();
        // $settingsModel = new settingsModel();
        $bagianDprdModel = new bagianDprdModel();

        $data = $rincianPerdinModel->getAllKwitansi($id_rincian_perdin);
        $settings = $bagianDprdModel->getBagianDPRDByID($bagian_dprd_id);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('cetak/rincian', ["title" => "Laporan perjalanan dinas", "data" => $data, "settings" => $settings]));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("", array("Attachment" => false));

        exit(0);

    }

    // Metode lain sesuai kebutuhan
}
