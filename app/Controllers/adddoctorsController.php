<?php namespace App\Controllers;
use App\Models\doctorsModel;
use App\Models\departmentsModel;

class adddoctorsController extends BaseController
{
    public function index(){
        $doctors=  new doctorsModel();
        $data['doctors']=$doctors->findAll();

		echo view('doctors_add/index.php', $data);
    }
	public function add($id)	{
        $departments=  new departmentsModel();
        $data['department']=$departments->find($id);
        
       
        return view('doctors_add/create', $data);
		
		
        
	}
    public function store(){
        $doctors= new doctorsModel();
        $file= $this->request->getFile('doc_image');
        if($file->isValid() && ! $file->hasMoved()){
            $imageName=$file->getRandomName();
            $file->move('uploads/', $imageName);
       
 
        }
        $data=[
            'first_name'=>$this->request->getPost('first_name'),
            'last_name'=>$this->request->getPost('last_name'),
            'email'=>$this->request->getPost('email'),
            'doc_image'=>$imageName,
            'department'=>$this->request->getPost('department'),
            'password'=>$this->request->getPost('password'),
            'added_by'=>$this->request->getPost('added_by'),
            
        ];
        $doctors->save($data);
        return redirect()->to(base_url('doctors_add'))->with('status', 'Doctor Added Successfully');
    }
    
    public function edit($id){
        $departments=  new departmentsModel();
        $data['department']=$departments->find($id);
        $doctors = new doctorsModel();
        $data['doctors']=$doctors->find($id);
        return view('doctors_add/edit', $data);
    
    }
    
    public function update($id){
       
        $doctors = new doctorsModel();
        $prod_item= $doctors->find($id);
        $old_img_name = $prod_item['doc_image'];

        $file=$this->request->getFile('doc_image');
       if($file->isValid()&& !$file->hasMoved()){
           
           if(file_exists("uploads/" .$old_img_name)){
               unlink("uploads/".$old_img_name);
           }
           $imageName=$file->getRandomName();
           $file->move('uploads/', $imageName);
       }
       else{
        $imageName = $old_img_name;
       }

        $data=[
            'first_name'=>$this->request->getPost('first_name'),
            'last_name'=>$this->request->getPost('last_name'),
            'email'=>$this->request->getPost('email'),
            'added_by'=>$this->request->getPost('added_by'),

            'password'=>$this->request->getPost('password'),
            'department'=>$this->request->getPost('department'),
            
            
        ];
        $doctors->update($id, $data);
        return redirect()->to(base_url('/doctors_add'))->with('status', 'Doctor updated Successfully');
    }
    public function delete($id)
    {
        $doctors= new doctorsModel();
        $doctors->delete($id);
        return redirect()->to(base_url('/doctors_add'))->with('status', 'Doctor deleted Successfully');
    }
    }
	
