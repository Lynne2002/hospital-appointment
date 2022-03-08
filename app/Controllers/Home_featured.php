<?php
 
namespace App\Controllers;
use App\Models\featuredhomes;

 
 
class Home_featured extends BaseController {
 
 
    public function index() {
         
        $featuredhomes = new featuredhomes();
        $data['homes'] = $featuredhomes->findAll();

        return view('featured_homes/index', $data);
    }
    public function create(){
       
        
       return view('featured_homes/create');
    }
    public function store(){
       $homes = new featuredhomes();
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
   
       
       
       ];
       $homes->save($data);
       return redirect()->to('/featured_homes')->with('status','Home added successfully');


    }
    public function edit($id){
        
        $featuredhomes = new featuredhomes();
        $data['homes']=$featuredhomes->find($id);
        return view('featured_homes/edit', $data);
    
    }
    public function update($id){
        $featuredhomes = new featuredhomes();
        $prod_item= $featuredhomes->find($id);
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
        $featuredhomes->update($id, $data);
        return redirect()->to(base_url('/featured_homes'))->with('status', 'Home updated Successfully');
    }
    public function delete($id)
{
	$homes= new featuredhomes();

    $data=$homes->find($id);
    $imagefile=$data['home_image'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$homes->delete($id);
	return redirect()->to(base_url('/featured_homes'))->with('status', 'Home deleted Successfully');
}
}