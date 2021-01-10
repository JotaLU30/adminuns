<?php namespace App\Controllers;

class Inicio extends BaseController
{
	public function index()
	{
		echo view('General/header');
		echo view('General/navbar');
		echo view('Inicio/Inicio');
		echo view('General/footer');
		echo view('General/end');
	}

	

}