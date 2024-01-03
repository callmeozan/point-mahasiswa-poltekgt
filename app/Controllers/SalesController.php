<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SalesController extends BaseController
{
    public function index()
    {
        // Set zona waktu ke WIB
        date_default_timezone_set('Asia/Jakarta');

        // Tanggal awal dan akhir
        $startDate = strtotime('1 January 2014');
        $endDate = strtotime('30 July 2014');

        // Inisialisasi variabel untuk menyimpan tanggal dan menampilkannya
        $currentDate = $startDate;
        $dateRange = [];

        // Mengakumulasi tanggal setiap bulan
        while ($currentDate <= $endDate) {
            $dateRange[] = date('d M, Y', $currentDate);
            $currentDate = strtotime('+1 month', $currentDate);
        }

        // Menggabungkan tanggal untuk ditampilkan dalam view
        $data['dateString'] = implode(' - ', $dateRange);

        return view('sales_view', $data);
    }
}
