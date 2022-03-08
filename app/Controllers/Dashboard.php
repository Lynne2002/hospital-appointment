<?php namespace App\Controllers;
use App\Models\featuredhomes;
use App\Models\Properties_Model;

class Dashboard extends BaseController
{
	public function index()
	{
		
		$featuredhomes = new featuredhomes();
		$data['homes' ] = $featuredhomes->findAll();
		$properties = new Properties_Model();
        $data['properties'] = $properties->findAll();

       
		echo view('home', $data);
		
	}

	//--------------------------------------------------------------------

}