<?php
 
namespace App\Controllers;
use App\Models\rolesModel;
 
 
class roles extends BaseController {
 
 
    public function index() {
        $roles = new rolesModel();
        $data['roles'] =$roles->findAll();

        return view('roles/index', $data);
    }
    public function create(){
        return view('roles/create');
    }
    public function store(){
       $role = new rolesModel();
       
       $data=[
        'role_name'=>$this->request->getPost('role_name'),
      
        
       
       ];
      
       $role->save($data);
       $session=session('payment');
        session()->set($data);
       return redirect()->to('/roles')->with('status','Role added successfully');


    }
    public function edit($id){
        $roles = new rolesModel();
        $data['role']=$roles->find($id);
        return view('roles/edit', $data);
    
    }
    public function update($id){
        $roles = new rolesModel();
        $role_item= $roles->find($id);
       
        $data=[
            'role_name'=>$this->request->getPost('role_name'),
            
       
            
        ];
        $roles->update($id, $data);
        return redirect()->to(base_url('/roles'))->with('status', 'Role updated Successfully');
    }
    public function delete($id)
{
	$role= new rolesModel();

    $data=$role->find($id);
    

	$role->delete($id);
	return redirect()->to(base_url('/roles'))->with('status', 'Role deleted Successfully');

}
}