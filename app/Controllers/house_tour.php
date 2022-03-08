<?php
 
namespace App\Controllers;
use App\Models\house_Model;

 
 
class house_tour extends BaseController {
 
 
    public function index() {
         
        $properties = new house_Model();
        $data['properties'] = $properties->findAll();

        return view('house_tour/index', $data);
    }
    public function create(){
       
        
       return view('house_tour/create');
    }
    public function store(){
        $properties = new house_Model();
        $upload_dir = 'uploads/'.DIRECTORY_SEPARATOR;
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
         
        // Define maxsize for files i.e 2MB
        $maxsize = 2 * 1024 * 1024;
     
        // Checks if user sent an empty form
        if(!empty(array_filter($_FILES['files']['name']))) {
     
            // Loop through each file in files[] array
            foreach ($_FILES['files']['tmp_name'] as $key => $value) {
                 
                $file_tmpname = $_FILES['files']['tmp_name'][$key];
                $file_name = $_FILES['files']['name'][$key];
                $file_size = $_FILES['files']['size'][$key];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
     
                // Set upload file path
                $filepath = $upload_dir.$file_name;
     
                // Check file type is allowed or not
                if(in_array(strtolower($file_ext), $allowed_types)) {
     
                    // Verify file size - 2MB max
                    if ($file_size > $maxsize)        
                        echo "Error: File size is larger than the allowed limit.";
     
                    // If file with name already exist then append time in
                    // front of name of the file to avoid overwriting of file
                    if(file_exists($filepath)) {
                        $filepath = $upload_dir.time().$file_name;
                         
                        if( move_uploaded_file($file_tmpname, $filepath)) {
                            echo "{$file_name} successfully uploaded <br />";
                        }
                        else {                    
                            echo "Error uploading {$file_name} <br />";
                        }
                    }
                    else {
                     
                        if( move_uploaded_file($file_tmpname, $filepath)) {
                            echo "{$file_name} successfully uploaded <br />";
                        }
                        else {                    
                            echo "Error uploading {$file_name} <br />";
                        }
                    }
                }
                else {
                     
                    // If file extension not valid
                    echo "Error uploading {$file_name} ";
                    echo "({$file_ext} file type is not allowed)<br / >";
                }
            }
        
        }
        else {
             
            // If no files selected
            echo "No files selected.";
        }

     
    
       $data=[
        'files'=>$file_name,
      
       
       
       ];
       $properties->save($data);
       return redirect()->to('/house_tour')->with('status','Home added successfully');


    }
    public function edit($id){
        
        $properties = new house_Model();
        $data['properties']=$properties->find($id);
        return view('house_tour/edit', $data);
    
    }
    public function update($id){
        $properties = new house_Model();
        $prod_item= $properties->find($id);
        $old_img_name = $prod_item['master_bedroom'];

        $file=$this->request->getFile('master_bedroom');
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
            'exterior'=>$this->request->getPost('exterior'),
        'living_room'=>$this->request->getPost('living_room'),
        'master_bedroom'=>$imageName,
        'bedroom_1'=>$this->request->getPost('bedroom_1'),
        ''=>$this->request->getPost(''),
        'bedroom_3'=>$this->request->getPost('bedroom_3'),
        
            
        ];
        $properties->update($id, $data);
        return redirect()->to(base_url('/house_tour'))->with('status', 'Property updated Successfully');
    }
    public function delete($id)
{
	$properties= new house_Model();

    $data=$properties->find($id);
    $imagefile=$data['master_bedroom'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$properties->delete($id);
	return redirect()->to(base_url('/house_tour'))->with('status', 'Property deleted Successfully');
}
}