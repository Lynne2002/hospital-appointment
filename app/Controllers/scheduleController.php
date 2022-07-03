<?php namespace App\Controllers;
use App\Models\scheduleModel;





class scheduleController extends BaseController{
    

    
    public function index(){
        $db = db_connect();
        $query = $db->query("SELECT * FROM `schedule_settings`");
        
        //$meta = array_column($query->fetch_all(MYSQLI_ASSOC),'meta_value','meta_field');
        $meta = $query->getResult('array');

        return view('doctor/schedule_settings/index');

    }
    public function store(){
        $db =db_connect();
        $appointments= new scheduleModel();
        $data = "";
        foreach($_POST as $k => $v){
          if(is_array($_POST[$k]))
          $v = implode(',',$_POST[$k]);
          if(!empty($data)) $data .= ",";
          $data .= " ('{$k}','{$v}') ";
        }
        $sql = "INSERT INTO `schedule_settings` (`meta_field`,`meta_value`) VALUES {$data}";
        if(!empty($data)){
          $query = $db->query("DELETE FROM `schedule_settings`");
          //$query->capture_err();
        }
        $save = $db->query($sql);
        if($save){
          return redirect()->to(base_url('doctor'))->with('status', 'Schedule Added Successfully');
        }else{
          $resp['status'] = 'failed';
          $resp['err'] = $db->query->error;
          $resp['msg'] = "An Error occured while excuting the query.";
      
        }
        return json_encode($resp);
    
   
        
        
        
       

    }
}