<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelWilayah;
use App\Models\ModelSetting;
use App\Models\ModelKost;

class Kost extends BaseController
{

 public function __construct()
    {
        $this->ModelWilayah = new ModelWilayah();
        $this->ModelSetting = new ModelSetting();
        $this->ModelKost = new ModelKost();
    }

    public function index()
    {
        $data = [
            'judul'   => 'Kost',
            'menu'    => 'kost',
            'page'    => 'kost/v_index',
            'kost' => $this->ModelKost->AllData(),
        ];

        return view('v_template_back_end', $data);
    }
}
