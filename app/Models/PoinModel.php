<?php

namespace App\Models;

use CodeIgniter\Model;

class PoinModel extends Model
{
    protected $table            = 'jenisdata';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['jenis', 'point'];

    public function getPlusPointCount()
    {
        return $this->where('jenis', 'Plus')->countAllResults();
    }

    public function getMinusPointCount()
    {
        return $this->where('jenis', 'Minus')->countAllResults();
    }
}
