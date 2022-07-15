<?php namespace App\Controllers;
use App\Models\UserModel;


class homepage extends BaseController
{
	public function index()
	{
		$users=  new UserModel();
        $data['users']=$users->findAll();
		echo view('home', $data);
		
	}
	

	//--------------------------------------------------------------------

}