<?php
 
namespace App\Controllers;
use App\Models\house_tour;

 
 
class houses_tour extends BaseController {
 
 
    public function index() {
         
       

        return view('houses_tour');
    }
    public function store(){
        $tours = new house_tour();
      
       $data=[
        'first_name'=>$this->request->getPost('first_name'),
        'last_name'=>$this->request->getPost('last_name'),
        'time'=>$this->request->getPost('time'),
        'agent'=>$this->request->getPost('agent'),
        'phone_number'=>$this->request->getPost('phone_number'),
        'email'=>$this->request->getPost('email'),
        'age'=>$this->request->getPost('age'),
        'gender'=>$this->request->getPost('gender'),
        'user_id'=>$this->request->getPost('user_id'),
        
        
       
       
       ];
       $tours->save($data);
       return view('buyersuccess');

    }
}