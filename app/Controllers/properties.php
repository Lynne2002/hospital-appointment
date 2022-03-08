<?php
 
namespace App\Controllers;
use App\Models\Properties_Model;

 
 
class properties extends BaseController {
 
 
    public function index() {
         
        $properties = new Properties_Model();
        $data['properties'] = $properties->findAll();

        return view('property_add/index', $data);
    }
    public function create(){
       
        
       return view('property_add/create');
    }
    public function store(){
       $properties = new Properties_Model();
       $file= $this->request->getFile('home_image');
       if($file->isValid() && ! $file->hasMoved()){
           $imageName=$file->getRandomName();
           $file->move('uploads/', $imageName);
      

       }
       $data=[
        'location'=>$this->request->getPost('location'),
        'address'=>$this->request->getPost('address'),
        'home_image'=>$imageName,
        'home_price'=>$this->request->getPost('home_price'),
        'bedrooms'=>$this->request->getPost('bedrooms'),
        'bathrooms'=>$this->request->getPost('bathrooms'),
        'size'=>$this->request->getPost('size'),
        'property_type'=>$this->request->getPost('property_type'),
   
       
       
       ];
       $properties->save($data);
       return redirect()->to('/property_add')->with('status','Home added successfully');


    }
    public function edit($id){
        
        $properties = new Properties_Model();
        $data['properties']=$properties->find($id);
        return view('property_add/edit', $data);
    
    }
    public function update($id){
        $properties = new Properties_Model();
        $prod_item= $properties->find($id);
        $old_img_name = $prod_item['home_image'];

        $file=$this->request->getFile('home_image');
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
            'location'=>$this->request->getPost('location'),
        'address'=>$this->request->getPost('address'),
        'home_image'=>$imageName,
        'home_price'=>$this->request->getPost('home_price'),
        'bedrooms'=>$this->request->getPost('bedrooms'),
        'bathrooms'=>$this->request->getPost('bathrooms'),
        
            
        ];
        $properties->update($id, $data);
        return redirect()->to(base_url('/property_add'))->with('status', 'Property updated Successfully');
    }
    public function delete($id)
{
	$properties= new Properties_Model();

    $data=$properties->find($id);
    $imagefile=$data['home_image'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$properties->delete($id);
	return redirect()->to(base_url('/property_add'))->with('status', 'Property deleted Successfully');
}
}