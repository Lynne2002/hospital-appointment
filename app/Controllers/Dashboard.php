<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];

	
		echo view('home', $data);
		
	}

	//--------------------------------------------------------------------

}