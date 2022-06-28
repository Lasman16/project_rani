<?php

namespace App\Controllers;

use App\Models\accountModel;

class Registrasi extends BaseController
{
    protected $accountModel;


    public function index()
    {
        return view('pages/registrasi');
    }

    public function save()
    {
        $this->accountModel->save([
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password')
        ]);

        return redirect()->to('/login');
    }
}