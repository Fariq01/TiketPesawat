<?php

namespace App\Controllers;

use App\Models\UserModel;
use Exception;

// class pemesan extend dari class BaseController untuk meyambungkan model dan view

class Pemesan extends BaseController
{
    //fungsi login mencari email dan password yang telah dimasukan pemesan apakah sudah ada pada database atau belum
	public function login()
    {
        $input = $this->request->getPost();

        $userModel = new UserModel();
        $data = $userModel->findUserByEmail($input['email']);
        if (isset($data)) 
        {
            if (password_verify($input['password'], $data['password']))
            {
                unset($data['password']);
                $this->session->set($data);
            }
        }
        return redirect()->to(base_url()); 
    }

    //fungsi registrasi akan memasukan input data dari user yang baru mendaftar
    public function registrasi() 
    {
        if ($this->request->getMethod() == 'post') {
            $input = $this->request->getPost();

            $userModel = new UserModel();
            $userModel->insert($input);

            return redirect()->to(base_url()); 
        }
        echo View('Header');
        echo View('Pemesan/Registrasi');
        echo View('Footer');
    }

    //fungsi untuk memasukan data ke database
    public function insert()
    {
        $data = $this->request->getPost();
        $userModel = new UserModel();
        $userModel->insert($data);
        return redirect()->to(base_url()); 
    }

    //fungsi untuk logout ketika user sudah login
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url()); 
    }

}
