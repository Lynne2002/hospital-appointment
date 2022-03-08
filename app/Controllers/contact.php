<?php namespace App\Controllers;
use App\Models\contactusModel;




class contact extends BaseController{
    

    
    public function index(){
       
       

        return view('contactUs');

    }
    public function store(){
        $messages = new contactusModel();
        
        $data=[
         'firstname'=>$this->request->getPost('firstname'),
        'lastname'=>$this->request->getPost('lastname'),
         'message'=>$this->request->getPost('message'),
         'email'=>$this->request->getPost('email'),
         'description'=>$this->request->getPost('description'),

       
         
        
        ];
        $session=session('orders');
        session()->set($data);

        $messages->save($data);
        return $this->response->redirect(site_url('messagesuccess'));
        
 
 
     }
     
     

    }
    