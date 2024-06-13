<?php

namespace App\Controllers;

use App\Models\LaporanPerjalananDinasModel;
use App\Models\KasModel;
use CodeIgniter\Controller;
use CodeIgniter\Files\File;

class LaporanPerjalananDinasController extends Controller
{
    public function index()
    {
        $laporanModel = new LaporanPerjalananDinasModel();
        $data['laporans'] = $laporanModel->ambilSemuaJoinPerdinBbmPelaksana(); // Mendapatkan semua data laporan

        return view('laporan/index', $data); // Menampilkan view index dengan data laporan
    }

    public function create($id="")
    {
        $validation = \Config\Services::validation();
        $session = \Config\Services::session();

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'perdin_id' => 'required',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $validation);
            }
            
            $files=$_FILES;
            $newSp=null;
            $newSppd=null;
            $newLp=null;
            $newKwitansi=null;
            $newLaporan=null;
            $error_upload=[];
            
            if($files["sp"]["name"]){
                $validationRule = [
                    'sp' => [
                        'label' => 'SP File',
                        'rules' => [
                            'uploaded[sp]',
                            'mime_in[sp,application/pdf]',
                            'max_size[sp,2000]',
                        ],
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $data = ['errors' => $this->validator->getErrors()];
                    array_push($error_upload, $this->validator->getErrors());
                    // return view('upload_form', $data);
                }
        
                $sp = $this->request->getFile('sp');
        
                if (! $sp->hasMoved()) {
                    // $filepath = ROOTPATH . 'public/uploads/SP/' . $img->store();
        
                    // $data = ['uploaded_fileinfo' => new File($filepath)];
                    $newSp = $sp->getRandomName();
                    $sp->move(ROOTPATH . 'public/uploads/SP/', $newSp);
        
                    // return view('upload_success', $data);
                }
            }

            if($files["sppd"]["name"]){
                $validationRule = [
                    'sppd' => [
                        'label' => 'SPPD File',
                        'rules' => [
                            'uploaded[sppd]',
                            'mime_in[sppd,application/pdf]',
                            'max_size[sppd,2000]',
                        ],
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $data = ['errors' => $this->validator->getErrors()];
                    array_push($error_upload, $this->validator->getErrors());
        
                    // return view('upload_form', $data);
                }
        
                $sppd = $this->request->getFile('sppd');
        
                if (! $sppd->hasMoved()) {
                    // $filepath = ROOTPATH . 'public/uploads/SP/' . $img->store();
        
                    // $data = ['uploaded_fileinfo' => new File($filepath)];
                    $newSppd = $sppd->getRandomName();
                    $sppd->move(ROOTPATH . 'public/uploads/SPPD/', $newSppd);
        
                    // return view('upload_success', $data);
                }
            }

            if($files["laporan_pdf"]["name"]){
                $validationRule = [
                    'laporan_pdf' => [
                        'label' => 'Laporan File',
                        'rules' => [
                            'uploaded[laporan_pdf]',
                            'mime_in[laporan_pdf,application/pdf]',
                            'max_size[laporan_pdf,2000]',
                        ],
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $data = ['errors' => $this->validator->getErrors()];
                    array_push($error_upload, $this->validator->getErrors());
        
                    // return view('upload_form', $data);
                }
        
                $laporan = $this->request->getFile('laporan_pdf');
        
                if (! $laporan->hasMoved()) {
                    // $filepath = ROOTPATH . 'public/uploads/SP/' . $img->store();
        
                    // $data = ['uploaded_fileinfo' => new File($filepath)];
                    $newLaporan = $laporan->getRandomName();
                    $laporan->move(ROOTPATH . 'public/uploads/Laporan/', $newLaporan);
        
                    // return view('upload_success', $data);
                }
            }

            if(! count($error_upload)){
                $laporanModel = new LaporanPerjalananDinasModel();
                $laporanModel->save([
                'perdin_id' => $this->request->getPost('perdin_id'),
                'sp' => $newSp,
                'sppd' => $newSppd,
                'lp' => $newLp,
                'kwitansi' => $newKwitansi,
                'laporan_pdf' => $newLaporan,
                'status' => 1
            ]);
            }else{$session->setFlashdata('error', $error_upload);}

            return redirect()->to('perjalanan_dinas');
        }
        $data['perdin_id']=$id;
        return view('laporan/create', $data);
    }

    public function editLaporan($id){
     
        $validation = \Config\Services::validation();
        $session = \Config\Services::session();

        $laporanModel = new LaporanPerjalananDinasModel();

        if ($this->request->getMethod() === 'post') {
            
            $files=$_FILES;
            $newSp=null;
            $newSppd=null;
            $newLp=null;
            $newKwitansi=null;
            $newLaporan=null;
            $error_upload=[];
            
            if($files["sp"]["name"]){
                $validationRule = [
                    'sp' => [
                        'label' => 'SP File',
                        'rules' => [
                            'uploaded[sp]',
                            'mime_in[sp,application/pdf]',
                            'max_size[sp,2000]',
                        ],
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $data = ['errors' => $this->validator->getErrors()];
                    array_push($error_upload, $this->validator->getErrors());
                }
        
                $sp = $this->request->getFile('sp');
        
                if (! $sp->hasMoved()) {
                    $newSp = $sp->getRandomName();
                    $sp->move(ROOTPATH . 'public/uploads/SP/', $newSp);
                }
            }

            if($files["sppd"]["name"]){
                $validationRule = [
                    'sppd' => [
                        'label' => 'SPPD File',
                        'rules' => [
                            'uploaded[sppd]',
                            'mime_in[sppd,application/pdf]',
                            'max_size[sppd,2000]',
                        ],
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $data = ['errors' => $this->validator->getErrors()];
                    array_push($error_upload, $this->validator->getErrors());
                }
        
                $sppd = $this->request->getFile('sppd');
        
                if (! $sppd->hasMoved()) {
                    $newSppd = $sppd->getRandomName();
                    $sppd->move(ROOTPATH . 'public/uploads/SPPD/', $newSppd);
                }
            }

            if($files["laporan_pdf"]["name"]){
                $validationRule = [
                    'laporan_pdf' => [
                        'label' => 'Laporan File',
                        'rules' => [
                            'uploaded[laporan_pdf]',
                            'mime_in[laporan_pdf,application/pdf]',
                            'max_size[laporan_pdf,2000]',
                        ],
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $data = ['errors' => $this->validator->getErrors()];
                    array_push($error_upload, $this->validator->getErrors());
                }
        
                $laporan = $this->request->getFile('laporan_pdf');
        
                if (! $laporan->hasMoved()) {
                    $newLaporan = $laporan->getRandomName();
                    $laporan->move(ROOTPATH . 'public/uploads/Laporan/', $newLaporan);
                }
            }

            if(! count($error_upload)){
                $laporanModel = new LaporanPerjalananDinasModel();
                
                $datas = [
                    'status' => 1
                ];

                if($newSp){
                    $datas["sp"]    = $newSp;
                }

                if($newSppd){
                    $datas["sppd"] = $newSppd;
                }

                if($newLaporan){
                    $datas["laporan_pdf"] = $newLaporan;
                }

                if(array_key_exists("sp", $datas) || array_key_exists("sppd", $datas) || array_key_exists("laporan_pdf", $datas)){
                    
                    $laporanModel->updateLaporan($id, $datas);
                }else{

                    $session->setFlashdata("error", "Tidak ada file yang di ubah");

                }
                
            }else{$session->setFlashdata('error', $error_upload);}

            return redirect()->to('laporan');
        }

        $data['id']             = $id;
        $data['data_laporan']   = $laporanModel->ambilLaporanPerdinBerdasarakanId($id);

        return view('laporan/editLaporan', $data);
        
    }

    public function edit($id)
    {
        $laporanModel = new LaporanPerjalananDinasModel();
        $data['laporan'] = $laporanModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                // Atur aturan validasi sesuai kebutuhan untuk edit
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $validation);
            }

            $laporanModel->update($id, [
                'perdin_id' => $this->request->getPost('perdin_id'),
                'sp' => $this->request->getPost('sp'),
                'sppd' => $this->request->getPost('sppd'),
                'lp' => $this->request->getPost('lp'),
                'kwitansi' => $this->request->getPost('kwitansi'),
                // Tambahkan aturan validasi dan logika update sesuai kebutuhan
            ]);

            return redirect()->to('/laporan_perjalanan_dinas');
        }

        return view('laporan/edit', $data);
    }

    public function konfirmasi($id)
    {
        // load instance object of model
        $laporanPerjalananDinasModel = new LaporanPerjalananDinasModel();
        $kasModel = new KasModel();

        $data['laporan_perjalanan_dinas'] = $laporanPerjalananDinasModel->ambilSemuaJoinPerdinBbmPelaksanaDetail($id);

        // cek if method post
        if ($this->request->getMethod() === 'post') {

            $formData1 = [
                "status" => $this->request->getPost('status')
            ];

            $laporanPerjalananDinasModel->update($id, $formData1);

            if ($this->request->getPost('status') == 2) {

                $formData = [

                    'perdin_id'         => $this->request->getPost('perdin_id'),
                    'keterangan'        => $this->request->getPost('keterangan'),
                    'debet'             => $this->request->getPost('debet'),
                    'bagian_dprd_id'    => $this->request->getPost('bagian_dprd_id'),

                ];

                $kasModel->insert($formData);
            }

            return redirect()->to('/laporan');
        }

        return view('laporan/konfirmasi', $data);
    }

    public function delete($id)
    {
        $laporanModel = new LaporanPerjalananDinasModel();
        $laporanModel->delete($id);

        return redirect()->to('/laporan_perjalanan_dinas');
    }
}
