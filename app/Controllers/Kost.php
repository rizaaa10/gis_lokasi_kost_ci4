<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kost extends BaseController
{
    public function index()
    {
        $data = [
            'judul'   => 'Kost',
            'menu'    => 'kost',
            'page'    => 'kost/v_index',
        ];

        return view('v_template_back_end', $data);
    }
}
