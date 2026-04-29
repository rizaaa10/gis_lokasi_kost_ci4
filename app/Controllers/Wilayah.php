<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelWilayah;
use App\Models\ModelSetting;

class Wilayah extends BaseController
{
    protected $ModelWilayah;
    protected $ModelSetting;

    public function __construct()
    {
        $this->ModelWilayah = new ModelWilayah();
        $this->ModelSetting = new ModelSetting();
    }

    public function index()
    {
        $data = [
            'judul'   => 'Wilayah',
            'menu'    => 'wilayah',
            'page'    => 'wilayah/v_index',
            'wilayah' => $this->ModelWilayah->AllData(),
            'web'     => $this->ModelSetting->DataWeb(),
        ];

        return view('v_template_back_end', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input Wilayah',
            'menu'    => 'wilayah',
            'page'  => 'wilayah/v_input',
            // kirim objek validation jika ada
            'validation' => \Config\Services::validation()
        ];

        return view('v_template_back_end', $data);
    }

    public function UpdateData($id_wilayah)
    {
        $rules = [
            'nama_wilayah' => [
                'label'  => 'Nama Wilayah',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'geojson' => [
                'label'  => 'Data GeoJSON',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'warna' => [
                'label'  => 'Warna',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            // jika validasi gagal, redirect kembali dengan input lama + validation
            return redirect()->to('Wilayah/Input')
                             ->withInput()
                             ->with('validation', \Config\Services::validation());
        }

        // jika lolos validasi, lakukan penyimpanan
        $data = [
            'id_wilayah'   => $id_wilayah,
            'nama_wilayah' => $this->request->getPost('nama_wilayah'),
            'geojson'      => $this->request->getPost('geojson'),
            'warna'        => $this->request->getPost('warna'),
        ];

        $this->ModelWilayah->UpdateData($data);
        session()->setFlashdata('update', 'Data berhasil diperbarui');

        return redirect()->to('Wilayah')->with('update', 'Data berhasil diperbarui');
    }

    public function Edit($id_wilayah)
    {
        $data = [
            'judul' => 'Edit Wilayah',
            'menu'    => 'wilayah',
            'page'  => 'wilayah/v_edit',
            'wilayah' => $this->ModelWilayah->DetailData($id_wilayah),
            // kirim objek validation jika ada
            'validation' => \Config\Services::validation()
        ];

        return view('v_template_back_end', $data);
    }

    public function InsertData()
    {
        $rules = [
            'nama_wilayah' => [
                'label'  => 'Nama Wilayah',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'geojson' => [
                'label'  => 'Data GeoJSON',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'warna' => [
                'label'  => 'Warna',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            // jika validasi gagal, redirect kembali dengan input lama + validation
            return redirect()->to('Wilayah/Input')
                             ->withInput()
                             ->with('validation', \Config\Services::validation());
        }

        // jika lolos validasi, lakukan penyimpanan
        $data = [
            'nama_wilayah' => $this->request->getPost('nama_wilayah'),
            'geojson'      => $this->request->getPost('geojson'),
            'warna'        => $this->request->getPost('warna'),
        ];

        $this->ModelWilayah->InsertData($data);
        session()->setFlashdata('insert', 'Data berhasil disimpan');

        return redirect()->to('Wilayah')->with('insert', 'Data berhasil disimpan');
    }

    public function Delete($id_wilayah) 
    {
        $data = [
            'id_wilayah' => $id_wilayah
        ];

        $this->ModelWilayah->DeleteData($data);
        session()->setFlashdata('delete', 'Data berhasil dihapus');

        return redirect()->to('Wilayah')->with('delete', 'Data berhasil dihapus');
    }
}