<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Daftar extends Model
{
    protected $table = 'daftar';

    public function __construct()
    {

        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData()
    {
        return $this->db->table('daftar')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('Daftar')->insert($data);
    }
    public function hapus($id)
    {
        return $this->db->table('Daftar')->delete(['id' => $id]);
    }
    public function ubah($data, $id)
    {
        return $this->builder->update($data, ['id' => $id]);
    }
}
