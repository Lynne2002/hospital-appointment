<?php
 
namespace App\Controllers;
use App\Models\sliders;

 
 
class sliderController extends BaseController {
 
 
    public function index() {


         
        $images = new sliders();
        $data['images'] = $images->findAll();

        return view('slider/index', $data);
    }
    public function create(){
      
        return view('slider/create');
    }
    public function store(){
       $images = new sliders();
       $file= $this->request->getFile('slider_image');
       if($file->isValid() && ! $file->hasMoved()){
           $imageName=$file->getRandomName();
           $file->move('uploads/', $imageName);
      

       }
       $data=[
        'City'=>$this->request->getPost('City'),
        'Town'=>$this->request->getPost('Town'),
        'slider_image'=>$imageName,
       
       
       ];
       $images->save($data);
       return redirect()->to('/slider')->with('status','Image added successfully');


    }
    public function edit($id){
        $images = new sliders();
        $data['images']=$images->find($id);
        return view('products/edit', $data);
    
    }
    public function update($id){
        $images = new sliders();
        $image_item= $images->find($id);
        $old_img_name = $image_item['slider_image'];

        $file=$this->request->getFile('slider_image');
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
            'Town'=>$this->request->getPost('Town'),
        'City'=>$this->request->getPost('Town'),
        'slider_image'=>$imageName,
     
            
        ];
        $images->update($id, $data);
        return redirect()->to(base_url('/products'))->with('status', 'Slider updated Successfully');
    }
    public function delete($id)
{
	$images= new Products();

    $data=$images->find($id);
    $imagefile=$data['slider_image'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$images->delete($id);
	return redirect()->to(base_url('/slider'))->with('status', 'Slider deleted Successfully');
}

}