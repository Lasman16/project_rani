<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('/pages/loginUser', $data);
    }

    public function validation()
    { {
            if (!$this->validate([
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'NIK harus diisi.'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'password harus diisi.'
                    ]
                ]
            ])) {
                $validation = \config\Services::validation();
                return redirect()->to('/Login/index')->withInput()->with('validation', $validation);
            }

            $this->AccountModel->save([
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
            ]);


            return redirect()->to('/admin');
        }
    }
}