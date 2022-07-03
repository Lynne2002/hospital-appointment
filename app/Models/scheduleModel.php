<?php namespace App\Models;

use CodeIgniter\Model;

class scheduleModel extends Model{
  protected $table = 'schedule_settings';
  protected $primaryKey="schedule_id";
  protected $allowedFields = [
      'meta_field', 
      'meta_value',
    'date_create'
       
        
  ];

        
  
}
function save_sched_settings(){
  $data = "";
  foreach($_POST as $k => $v){
    if(is_array($_POST[$k]))
    $v = implode(',',$_POST[$k]);
    if(!empty($data)) $data .= ",";
    $data .= " ('{$k}','{$v}') ";
  }
  $sql = "INSERT INTO `schedule_settings` (`meta_field`,`meta_value`) VALUES {$data}";
  if(!empty($data)){
    $this->conn->query("DELETE FROM `schedule_settings`");
    $this->capture_err();
  }
  $save = $this->conn->query($sql);
  if($save){
    $resp['status'] = 'success';
    $this->settings->set_flashdata('success',' Schedule settings successfully updated');
  }else{
    $resp['status'] = 'failed';
    $resp['err'] = $this->conn->error;
    $resp['msg'] = "An Error occure while excuting the query.";

  }
  return json_encode($resp);
}
  
  
 

  ?>