<?php
 
namespace App\Controllers;
use App\Models\agents;

 
 
class agentController extends BaseController {
 
 
    public function index() {
         
        $agents = new agents();
        $data['agents'] = $agents->findAll();

        return view('agents/index', $data);
    }
    public function create(){
       
        
       return view('agents/create');
    }
    public function store(){
       $agents = new agents();
       $file= $this->request->getFile('agent_image');
       if($file->isValid() && ! $file->hasMoved()){
           $imageName=$file->getRandomName();
           $file->move('uploads/', $imageName);
      

       }
       $data=[
        'first_name'=>$this->request->getPost('first_name'),
        'last_name'=>$this->request->getPost('last_name'),
        'agent_image'=>$imageName,
        'email'=>$this->request->getPost('email'),
        'phone'=>$this->request->getPost('phone'),
        'LinkedIn'=>$this->request->getPost('LinkedIn'),
        'facebook'=>$this->request->getPost('facebook'),
        'twitter'=>$this->request->getPost('twitter'),
        'instagram'=>$this->request->getPost('instagram'),
   
       
       
       ];
       $agents->save($data);
       return redirect()->to('/agents')->with('status','Agent added successfully');


    }
    public function edit($id){
        
        $agents = new agents();
        $data['agents']=$agents->find($id);
        return view('agents/edit', $data);
    
    }
    public function update($id){
        $agents = new agents();
        $prod_item= $agents->find($id);
        $old_img_name = $prod_item['agent_image'];

        $file=$this->request->getFile('agent_image');
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
        'agent_image'=>$imageName,
        'email'=>$this->request->getPost('email'),
        'phone'=>$this->request->getPost('phone'),
        'LinkedIn'=>$this->request->getPost('LinkedIn'),
        'instagram'=>$this->request->getPost('instagram'),
        'facebook'=>$this->request->getPost('facebook'),
        
            
        ];
        $agents->update($id, $data);
        return redirect()->to(base_url('/agents'))->with('status', 'Agent updated Successfully');
    }
    public function delete($id)
{
	$agents= new agents();

    $data=$agents->find($id);
    $imagefile=$data['agent_image'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$agents->delete($id);
	return redirect()->to(base_url('/agents'))->with('status', 'Agent deleted Successfully');
}
}