<?php
 
namespace App\Controllers;
use App\Models\HospitalModel;


 
 
class hospitals extends BaseController {
 
 
    public function index() {
         
        $hospitals = new HospitalModel();
        $data['hospitals'] = $hospitals->findAll();

        return view('hospitals/index', $data);
    }
    public function create(){
       
        
       return view('hospitals/create');
    }
    public function store(){
       $hospitals = new HospitalModel();
       $file= $this->request->getFile('hospital_image');
       if($file->isValid() && ! $file->hasMoved()){
           $imageName=$file->getRandomName();
           $file->move('uploads/', $imageName);
      

       }
       $data=[
        'hospital_name'=>$this->request->getPost('hospital_name'),
        'address'=>$this->request->getPost('address'),
        'hospital_image'=>$imageName,
        'lat'=>$this->request->getPost('lat'),
        'lng'=>$this->request->getPost('lng'),
        'location'=>$this->request->getPost('location'),
        'doctors'=>$this->request->getPost('doctors'),
        'departments'=>$this->request->getPost('departments'),
   
       
       
       ];
       $hospitals->save($data);
       return redirect()->to('/hospitals')->with('status','Hospital added successfully');


    }
    public function edit($id){
        
        $hospitals = new HospitalModel();
        $data['hospitals']=$hospitals->find($id);
        return view('hospitals/edit', $data);
    
    }
    public function update($id){
        $hospitals = new HospitalModel();
        $prod_item= $hospitals->find($id);
        $old_img_name = $prod_item['hospital_image'];

        $file=$this->request->getFile('hospital_image');
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
            'hospital_name'=>$this->request->getPost('hospital_name'),
        'address'=>$this->request->getPost('address'),
        'hospital_image'=>$imageName,
        'lat'=>$this->request->getPost('lat'),
        'lng'=>$this->request->getPost('lng'),
        'location'=>$this->request->getPost('location'),
        'doctors'=>$this->request->getPost('doctors'),
        'departments'=>$this->request->getPost('departments'),
        
        
            
        ];
        $hospitals->update($id, $data);
        return redirect()->to(base_url('/hospitals'))->with('status', 'Hospital updated Successfully');
    }
    public function delete($id)
{
	$hospitals= new HospitalModel();

    $data=$hospitals->find($id);
    $imagefile=$data['hospital_image'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$hospitals->delete($id);
	return redirect()->to(base_url('/hospitals'))->with('status', 'Hospital deleted Successfully');
}

}
