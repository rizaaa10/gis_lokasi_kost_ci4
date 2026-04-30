<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKost extends Model
{

    public function AllData()
    {
        return $this->db->table('tbl_kost')
        ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_kost')->insert($data);
    }

    public function DetailData($id_kost)
    {
        return $this->db->table('tbl_kost')
        ->where('id_kost', $id_kost)
        ->get()->getRowArray();
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_kost')
        ->where('id_kost', $data['id_kost'])
        ->update($data);
    }

    
    public function DeleteData($data)
    {
        $this->db->table('tbl_kost')
        ->where('id_kost', $data['id_kost'])
        ->delete();
    }

}