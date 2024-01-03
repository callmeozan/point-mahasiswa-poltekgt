<?php

namespace App\Controllers;

use App\Models\Dataplus;
use App\Models\Konfirmasi;

class Admin extends BaseController
{

    public function index()
    {
        $statusModel = new Konfirmasi();
        $konfirmasi = $statusModel->getKonfirmasi();
        $disetujui = $statusModel->getDisetujui();
        $ditolak = $statusModel->getDitolak();
        $totalStatus = $konfirmasi + $disetujui + $ditolak;


        $modelDataplus = new Dataplus();
        $auth = service('authentication');
        $user = user();
        $auth->check();

        if ($user) {
            $username = $user->fullname;
        } else {
            $username = 'Guest';
        }

        $data = [
            'title' => 'Dashboard',

            'konfirmasi' => $konfirmasi,
            'disetujui' => $disetujui,
            'ditolak' => $ditolak,
            'count' => $totalStatus,

            'tambahData' => $modelDataplus->orderBy('tanggal', 'DESC')->findAll(),

            'username' => $username,
            'menu' => 'dashboard',
            'submenu' => ''
        ];
        return view('admin/admin', $data);
    }

    // public function kategori()
    // {
    //     $modelKategori = new Kategori();
    //     $user = user();

    //     if ($user) {
    //         $username = $user->fullname;
    //     } else {
    //         $username = 'Guest';
    //     }

    //     $data = [
    //         'username' => $username,
    //         'menu' => 'kategori',
    //         'submenu' => '',
    //         'dataKategori' => $modelKategori->findAll(),
    //     ];
    //     return view('admin/kategori', $data);
    // }

    public function konfirmasi($id)
    {
        $model = new Konfirmasi();
        $model->update($id, ['konfirmasi' => 'Menunggu Konfirmasi']);

        session()->setFlashdata('pesan', 'Data Berhasil Dibatalkan');
        return redirect()->to('/admin');
    }

    public function setuju($id)
    {
        $model = new Konfirmasi();
        $model->update($id, ['konfirmasi' => 'Disetujui']);

        session()->setFlashdata('pesan', 'Data Berhasil Dikonfirmasi');
        return redirect()->to('/admin');
    }

    public function tolak($id)
    {
        $model = new Konfirmasi();
        $model->update($id, ['konfirmasi' => 'Ditolak']);

        session()->setFlashdata('pesan', 'Data Berhasil Dikonfirmasi');
        return redirect()->to('/admin');
    }
}
