<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use CodeIgniter\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        $settingsModel = new SettingsModel();

        return view('settingss/index', ['data' => $settingsModel->getSettings()]);
    }

    public function edit($id)
    {
        $settingsModel = new SettingsModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'nama_pembina' => 'required',
            'nip_pembina' => 'required',
            'nama_pembina_utama_muda' => 'required',
            'nip_pembina_utama_muda' => 'required',
            'nama_penata_muda' => 'required',
            'nip_penata_muda' => 'required',
            'nama_bendahara' => 'required',
            'nip_bendahara' => 'required',
        ])) {
            $settingsModel->updateSettings($id, $this->request->getPost());
            return redirect()->to('/settings');
        }
    }
}
