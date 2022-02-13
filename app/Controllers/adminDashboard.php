<?php namespace App\Controllers;

class adminDashboard extends BaseController
{
	public function index()
	{
		$data = [];

	
		echo view('adminDashboard');
		
	}
	public function isLoggedIn()
{
  if (isset($_SESSION['user'])) {
    return true;
  }else{
    return false;
  }

	

}
}