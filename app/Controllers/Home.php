<?php

namespace App\Controllers;


// class home adalah controller dari model home
// untuk memanggil view class header, home, dan footer

class Home extends BaseController
{
	public function index()
	{
		echo view('Header');
		echo view('Home');
		echo view('Footer');
	}
}
