<?php

namespace App\Models;

use CodeIgniter\Model;

class Dataplus extends Model
{
    protected $table            = 'jenisdata';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nim', 'nama', 'jenis', 'point', 'keterangan', 'tanggal'];

    public function getDataById($id)
    {
        return $this->find($id);
    }

    public function editData($id, $jenis, $point, $keterangan)
    {
        $data = [
            'jenis' => $jenis,
            'point' => $point,
            'keterangan' => $keterangan,
        ];

        $this->update($id, $data);
    }
}
