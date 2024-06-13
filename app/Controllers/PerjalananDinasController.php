<?php

namespace App\Controllers;

use App\Models\PerjalananDinasModel;
use App\Models\NamaPelaksanaModel;
use App\Models\BbmModel;
use App\Models\BagianDPRDModel;
use App\Models\KasModel;
use CodeIgniter\Controller;

class PerjalananDinasController extends Controller
{
    public function index()
    {
        $perjalananDinasModel = new PerjalananDinasModel();
        $data['perjalanan'] = $perjalananDinasModel->getPerjalananDinasData();

        return view('perjalanan_dinas/index', $data);
    }

    // Fungsi lainnya seperti create, edit, delete, dsb.
    public function create()
    {
        // Fetch data for dropdowns
        $namaPelaksanaModel = new NamaPelaksanaModel();
        $bbmModel = new BbmModel();
        $bagianDprdModel = new BagianDPRDModel();

        $data['namaPelaksana'] = $namaPelaksanaModel->findAll();
        $data['bbm'] = $bbmModel->findAll();
        $data['bagian'] = $bagianDprdModel->getBagianDPRD();

        if ($this->request->getMethod() === 'post') {

            $perjalananDinasModel = new PerjalananDinasModel();

            // Fetch form data
            $formData = [
                'pelaksana_id' => $this->request->getPost('pelaksana_id'),
                'bbm_id' => $this->request->getPost('bbm_id'),
                'bagian_dprd_id' => $this->request->getPost('bagian_dprd_id'),
                'anggota'       => $this->request->getPost('anggota'),
                'transportasi'       => $this->request->getPost('transportasi'),
                'keterangan'       => $this->request->getPost('keterangan'),
                'kode_rekening'       => $this->request->getPost('kode_rekening'),
                'status' => $this->request->getPost('status'),
                'biaya' => $this->request->getPost('biaya'),
                'status'   => 1
                // ... other fields
            ];

            // dd($formData);

            // Save to database
            $perjalananDinasModel->insert($formData);

            return redirect()->to('/perjalanan_dinas');
        }

        return view('perjalanan_dinas/create', $data);
    }

    public function edit($id)
    {
        $perjalananDinasModel = new PerjalananDinasModel();
        $namaPelaksanaModel = new NamaPelaksanaModel();
        $bbmModel = new BbmModel();

        $data['perjalanan_dinas'] = $perjalananDinasModel->find($id);
        $data['namaPelaksana'] = $namaPelaksanaModel->findAll();
        $data['bbm'] = $bbmModel->findAll();

        if ($this->request->getMethod() === 'post') {
            // Process form data and update the record
            // ...

            return redirect()->to('/perjalanan_dinas');
        }

        return view('perjalanan_dinas/edit', $data);
    }

    public function konfirmasi($id)
    {
        // load instance object of model
        $perjalananDinasModel = new PerjalananDinasModel();
        $kasModel = new KasModel();

        // set data
        $data['perjalanan_dinas'] = $perjalananDinasModel->getDetailPerjalananDinasData($id);

        // cek if method post
        if ($this->request->getMethod() === 'post') {

            $formData = [

                'perdin_id'         => $this->request->getPost('perdin_id'),
                'keterangan'        => $this->request->getPost('keterangan'),
                'debet'             => $this->request->getPost('debet'),
                'bagian_dprd_id'    => $this->request->getPost('bagian_dprd_id'),

            ];

            // dd($formData);

            $kasModel->insert($formData);

            return redirect()->to('/perjalanan_dinas');
        }

        return view('perjalanan_dinas/konfirmasi', $data);
    }

    public function delete($id)
    {
        $perjalananDinasModel = new PerjalananDinasModel();
        $perjalananDinasModel->delete($id);

        return redirect()->to('/perjalanan_dinas');
    }
}
