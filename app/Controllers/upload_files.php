<?php

namespace App\Controllers;
use App\Models\seller_upload;

class upload_files extends BaseController
{
    public function index()
    {
        
        return view('seller/create_2');
        
    }
    
     public function store(){
        $seller = new seller_upload();


        $file_name =  $_FILES['property_files']['name'];
        $tmp_name = $_FILES['property_files']['tmp_name'];
        $file_up_name = time().$file_name;
       move_uploaded_file($tmp_name, "uploads/".$file_up_name);
      
       $data=[
        'property_files'=>$file_up_name,
        'first_name'=>$this->request->getPost('first_name'),
        'user_id'=>$this->request->getPost('user_id'),
        'last_name'=>$this->request->getPost('last_name'),
   
       
       
       ];
       $seller->save($data);
       return redirect()->to('seller_homes')->with('status','Home added successfully');
        
      
     }

}