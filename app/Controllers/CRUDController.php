<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\doctorsModel;
class CRUDController extends BaseController
{
	private $db;


public function __construct()
{
  $this->db = db_connect();
}
	public function index()
	{
		
		$users=  new UserModel();
        $data['users']=$users->findAll();

		$doctors=  new doctorsModel();
        $data['doctors']=$doctors->findAll();

		echo view('admin/index.php', $data);
		
	}
	public function join()
{
  echo "<pre>";
  
  //print_r($data);
  //$data['mega_header'][] = (object) array('title' => 'product_image' 
   // 'product_image' => '/public/uploads' );
  $array = json_decode(json_encode($data), true);

}
	public function create(){
		return view('admin/create');
	}


public function store(){
	$users= new UserModel();
	$data=[
		'first_name'=>$this->request->getPost('first_name'),
		'last_name'=>$this->request->getPost('last_name'),
		'email'=>$this->request->getPost('email'),
		'registration_type'=>$this->request->getPost('registration_type'),
		'password'=>$this->request->getPost('password'),
		
	];
	$users->save($data);
	return redirect()->to(base_url('admin'))->with('status', 'User Added Successfully');
}

public function edit($user_id){
	$users = new UserModel();
	$data['users']=$users->find($user_id);
	return view('admin/edit', $data);

}

public function update($user_id){
	$users = new UserModel();
	$users->find($user_id);
	$data=[
		'first_name'=>$this->request->getPost('first_name'),
		'last_name'=>$this->request->getPost('last_name'),
		'email'=>$this->request->getPost('email'),
		'registration_type'=>$this->request->getPost('registration_type'),
		'password'=>$this->request->getPost('password'),
		
		
	];
	$users->update($user_id, $data);
	return redirect()->to(base_url('admin'))->with('status', 'User updated Successfully');
}
public function delete($user_id)
{
	$users= new UserModel();
	$users->delete($user_id);
	return redirect()->to(base_url('admin'))->with('status', 'User deleted Successfully');
}
}
?>