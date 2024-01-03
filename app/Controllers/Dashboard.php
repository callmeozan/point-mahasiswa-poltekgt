<?php

namespace App\Controllers;

use App\Models\Dataplus;
use App\Models\PoinModel;

class Dashboard extends BaseController
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
        //$data['dateString'] = implode(' - ', $dateRange);


        //modal edit
        // $id = 1;
        // $modelEdit = new Dataplus();

        //menampilkan point
        $poinModel = new PoinModel();
        $plusPointCount = $poinModel->getPlusPointCount();
        $minusPointCount = $poinModel->getMinusPointCount();
        $totalPointCount = $plusPointCount + $minusPointCount;

        //membaca dari database
        $modelDataplus = new Dataplus();
        $auth = service('authentication');
        $user = user();
        $auth->check();

        //user logged-in
        if ($user) {
            $username = $user->fullname;
        } else {
            $username = 'Guest';
        }

        $data = [
            "title" => "Dashboard",
            //
            'dateString' => implode(' - ', $dateRange),
            //
            'plus' => $plusPointCount,
            'minus' => $minusPointCount,
            'totalPoin' => $totalPointCount,
            //
            'username' => $username,
            'menu' => 'dashboard',
            'submenu' => '',
            'tambahData' => $modelDataplus->orderBy('tanggal', 'DESC')->findAll(),
        ];
        return view('/mahasiswa/dashboard', $data);
    }

    public function profil()
    {
        $user = user();
        if ($user) {
            $username = $user->fullname;
        } else {
            $username = 'Guest';
        }

        $data = [
            "title" => "Profil",
            //
            'username' => $username,
            'menu' => 'profil',
            'submenu' => '',
        ];
        return view('/mahasiswa/profilku', $data);
    }

    public function inputData()
    {
        $user = user();
        if ($user) {
            $username = $user->fullname;
        } else {
            $username = 'Guest';
        }

        $data = [
            'title' => 'Plus Point',
            //
            'username' => $username,
            'menu' => 'kondite',
            'submenu' => 'plus',
        ];

        return view('/mahasiswa/input-data', $data);
    }

    public function dataMinus()
    {
        $user = user();
        if ($user) {
            $username = $user->fullname;
        } else {
            $username = 'Guest';
        }

        $data = [
            'title' => 'Minus Point',
            //
            'username' => $username,
            'menu' => 'kondite',
            'submenu' => 'minus',
        ];

        return view('/mahasiswa/data-minus', $data);
    }

    public function saveData()
    {
        $data = $this->request->getPost();
        $modelDataplus = new Dataplus();

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        try {
            $modelDataplus->save($data);
            return redirect()->to('/User');
        } catch (\Throwable $th) {
            die('error : ' . $th->getMessage());
        }
    }

    public function delete($id)
    {
        $modelData = new Dataplus();
        $modelData->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/User');
    }

    public function edit($id)
    {
        $modelEdit = new Dataplus();

        $data = [
            'editData' => $modelEdit->getDataById($id)
        ];

        return view('/data/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $jenis = $this->request->getPost('jenis');
        $point = $this->request->getPost('point');
        $keterangan = $this->request->getPost('keterangan');

        $modelEdit = new Dataplus();
        $modelEdit->editData($id, $jenis, $point, $keterangan);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/User');
    }
}
