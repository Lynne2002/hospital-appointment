<?php
 
 namespace App\Controllers;
 use App\Models\HospitalModel;
 use App\Models\departmentsModel;
  

class departmentsController extends BaseController {
 
 
    public function index() {
         
        $departments = new departmentsModel();
        $data['departments'] =$departments->findAll();

        return view('departments/index', $data);
    }
    public function add($id){
        $hospitals = new hospitalModel();
        $data['hospital']=$hospitals->find($id);
        
       
        return view('departments/create', $data);
    }
    public function store(){
        
         $departments = new departmentsModel();
       
         $data=[
        
        
        'department_name'=>$this->request->getPost('department_name'),
        'department_description'=>$this->request->getPost('department_description'),
        'hospital'=>$this->request->getPost('hospital'),
        
      
        


       
       ];
     $departments->save($data);
       return redirect()->to('/departments')->with('status','Department added successfully');


    }
    public function edit($id){
        $hospitals = new hospitalModel();
        $data['hospital']=$hospitals->find($id);
     $departments = new departmentsModel();
        $data['department']=$departments->find($id);
        return view('departments/edit', $data);
    
    }
    public function update($id){
     $departments = new departmentsModel();
       $subcat_item=$departments->find($id);
       
        $data=[
            'department_name'=>$this->request->getPost('department_name'),
            'hospital'=>$this->request->getPost('hospital'),
            'department_description'=>$this->request->getPost('department_description'),
       
            
        ];
     $departments->update($id, $data);
        return redirect()->to(base_url('/departments'))->with('status', 'Department updated Successfully');
    }
    public function delete($id)
{
	$departments= new departmentsModel();

    $data=$departments->find($id);
    

	$departments->delete($id);
	return redirect()->to(base_url('/departments'))->with('status', 'Department deleted Successfully');
}

}