<?php
 
namespace App\Controllers;
use App\Models\home_details;

 
 
class seller_homes extends BaseController {
 
 
    public function index() {
         
        

        return view('seller/create_3');
    }
    
    public function store(){
        if(!empty(array_filter($_FILES['home_image']['name']))) {

           
          foreach ($_FILES['home_image']['tmp_name'] as $key => $value) {
                 
             $file_tmpname = $_FILES['home_image']['tmp_name'][$key];
             $file_name = $_FILES['home_image']['name'][$key];
             $file_size = $_FILES['home_image']['size'][$key];
             $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
               
            
    
          }
    
     } else {
             
       
        echo "No files selected.";
     }
       $data=[
        'district'=>$this->request->getPost('district'),
        'constituency'=>$this->request->getPost('constituency'),
        'address'=>$this->request->getPost('address'),
        'home_image'=>$file_name,
        'home_price'=>$this->request->getPost('home_price'),
        'bedrooms'=>$this->request->getPost('bedrooms'),
        'bathrooms'=>$this->request->getPost('bathrooms'),
        'size'=>$this->request->getPost('size'),
        'user_id'=>$this->request->getPost('user_id'),
        'first_name'=>$this->request->getPost('first_name'),
        'last_name'=>$this->request->getPost('last_name'),
   
       
       
       ];
       $seller_homes->save($data);
       return redirect()->to('/sellers')->with('status','Home added successfully');


    }
    public function edit($id){
        
        $seller_homes = new seller_homes();
        $data['seller_homes']=$seller_homes->find($id);
        return view('property_add/edit', $data);
    
    }
    public function update($id){
        $seller_homes = new seller_homes();
        $prod_item= $seller_homes->find($id);
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
        $seller_homes->update($id, $data);
        return redirect()->to(base_url('/property_add'))->with('status', 'Property updated Successfully');
    }
    public function delete($id)
{
	$seller_homes= new seller_homes();

    $data=$seller_homes->find($id);
    $imagefile=$data['home_image'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$seller_homes->delete($id);
	return redirect()->to(base_url('/property_add'))->with('status', 'Property deleted Successfully');
}
}