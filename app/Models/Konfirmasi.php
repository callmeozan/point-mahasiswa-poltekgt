<?php

namespace App\Models;

use CodeIgniter\Model;

class Konfirmasi extends Model
{
    protected $table            = 'jenisdata';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'jenis', 'point', 'keterangan', 'tanggal', 'konfirmasi'];

    public function updateKonfirmasi($id, $status)
    {
        $data = [
            'konfirmasi' => $status,
        ];

        return $this->update($id, $data);
    }

    public function getKonfirmasi()
    {
        return $this->where('konfirmasi', 'Menunggu Konfirmasi')->countAllResults();
    }

    public function getDisetujui()
    {
        return $this->where('konfirmasi', 'Disetujui')->countAllResults();
    }

    public function getDitolak()
    {
        return $this->where('konfirmasi', 'Ditolak')->countAllResults();
    }
}
