<?php

namespace App\Controllers;
use App\Models\seller;

class sellers extends BaseController
{
    public function index()
    {
        $seller = new seller();
        $data['seller'] = $seller->findAll();

        return view('seller/create', $data);
    }
    public function create(){
       
        
        return view('seller/create');
     }
     public function store(){
        $seller = new seller();
      
       $data=[
        'first_name'=>$this->request->getPost('first_name'),
        'last_name'=>$this->request->getPost('last_name'),
        'Address_1'=>$this->request->getPost('Address_1'),
        'Address_2'=>$this->request->getPost('Address_2'),
        'District'=>$this->request->getPost('District'),
        'constituency'=>$this->request->getPost('constituency'),
        'phone_number'=>$this->request->getPost('phone_number'),
        'email'=>$this->request->getPost('email'),
        'age'=>$this->request->getPost('age'),
        'gender'=>$this->request->getPost('gender'),
        'legal'=>$this->request->getPost('legal'),
        'user_id'=>$this->request->getPost('user_id'),
        'property_type'=>$this->request->getPost('property_type'),
       
       
       ];
       $seller->save($data);
       return redirect()->to('upload_files')->with('status','Home added successfully');
        
      
     }

}