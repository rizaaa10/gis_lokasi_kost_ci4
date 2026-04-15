<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelSetting;

class Admin extends Controller
{
    public function __construct()
    {
        $this->ModelSetting = new ModelSetting();
        helper('form');
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard',
        ];
        return view('v_template_back_end', $data);
    }

    public function Setting()
{
    $data = [
        'judul' => 'Setting',
        'page' => 'v_setting',
        'web' => $this->ModelSetting->DataWeb(),
    ];
    return view('v_template_back_end', $data);
}
public function UpdateSetting()
{
    $data = [
        'id' => 1,
        'nama_web' => $this->request->getPost('nama_web'),
        'koordinat_wilayah' => $this->request->getPost('koordinat_wilayah'),
        'zoom_view' => $this->request->getPost('zoom_view'),
    ];

    $this->ModelSetting->UpdateData($data, $this->request->getPost());

    session()->setFlashdata('pesan', 'Settingan Web berhasil diupdate !!!'); // ✅ FIX

   return redirect()->to(base_url('admin/setting'));
}
}
