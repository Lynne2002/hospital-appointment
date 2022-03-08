<?php

namespace App\Controllers;
use App\Models\upload_images;

class homes_uploads extends BaseController
{
    public function index()
    {
        
        return view('seller/create_3');
        
    }
    
     public function store(){
        $seller = new upload_images();
        $file= $this->request->getFile('home_image');
        if($file->isValid() && ! $file->hasMoved()){
            $imageName=$file->getRandomName();
            $file->move('uploads/', $imageName);
       
 
        }
      
       $data=[
        
        'address'=>$this->request->getPost('address'),
        'district'=>$this->request->getPost('district'),
        'constituency'=>$this->request->getPost('constituency'),
        'home_image'=>$imageName,
        'home_price'=>$this->request->getPost('home_price'),
        'bedrooms'=>$this->request->getPost('bedrooms'),
        'bathrooms'=>$this->request->getPost('bathrooms'),
        'size'=>$this->request->getPost('size'),
        'user_id'=>$this->request->getPost('user_id'),
        'first_name'=>$this->request->getPost('first_name'),
        'last_name'=>$this->request->getPost('last_name'),
   
       
       
       ];
       $seller->save($data);
       return redirect()->to('sellersuccess')->with('status','Home added successfully');
        
      
     }

}