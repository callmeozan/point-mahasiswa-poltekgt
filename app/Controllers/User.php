<?php

namespace App\Controllers;

use App\Models\Dataplus;

class User extends BaseController
{
    public function index()
    {
        $modelDataplus = new Dataplus();

        $data = [
            'menu' => 'dashboard',
            'submenu' => '',
            'tambahData' => $modelDataplus->findAll()
        ];
        return view('#', $data);
    }
}
