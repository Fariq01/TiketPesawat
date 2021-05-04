<?php

namespace App\Controllers;

use App\Models\UserModel;
use Exception;

//controller class admin untuk menghubungkan model dan view admin
class Admin extends BaseController
{
    //fungsi menampilkan homepage admin setelah login
    public function home() {
        echo View('Admin/Header');
        echo View('Admin/Home');
        echo View('Admin/Footer');
    }

    //fungsi login untuk admin
    // mencari email dan password yg dimasukan user  pada database apakah data admin atau bukan
	public function login()
    {
        if ($this->request->getMethod() == 'post') {
            $input = $this->request->getPost();

            $userModel = new UserModel();
            $data = $userModel->findUserByEmail($input['email']);
            if (isset($data)) 
            {
                if (password_verify($input['password'], $data['password']))
                {
                    unset($data['password']);
                    $this->session->set($data);
                    return redirect()->to(base_url(Admin/Home)); 
                }
            }
            return redirect()->to(base_url(Admin/Login)); 
        }
        echo View('Admin/Header');
        echo View('Admin/Login');
        echo View('Admin/Footer');
    }

    //Registrasi untuk admin
    public function registrasi() 
    {
        if ($this->request->getMethod() == 'post') {
            $input = $this->request->getPost();

            $userModel = new UserModel();
            $userModel->insert($input);

            return redirect()->to(base_url()); 
        }
        echo View('Admin/Header');
        echo View('Admin/Registrasi');
        echo View('Admin/Footer');
    }
    //class menghubungkan model dengan view
    public function insert()
    {
        $data = $this->request->getPost();
        $userModel = new UserModel();
        $userModel->insert($data);
        return redirect()->to(base_url()); 
    }
    //fungsi logout admin ketika sudah login
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url()); 
    }

}
