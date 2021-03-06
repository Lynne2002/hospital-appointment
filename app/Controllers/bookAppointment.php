<?php namespace App\Controllers;
use App\Models\HospitalModel;
use App\Models\appointmentsModel;
use App\Controllers\nearest;
use App\Models\scheduleModel;
 
class bookAppointment extends BaseController {
public function index($id){
    $appointments = new HospitalModel();
  
    $data['hospitals']=$appointments->find($id);
    return view('bookApp', $data);

}
public function store(){
	
	$schedule= new scheduleModel();
	$appointments= new appointmentsModel();
	//$data['appointments']=$appointments->find($id);
	$db =db_connect();
	extract($_POST);
	$sched_set_qry = $db->query("SELECT * FROM `schedule_settings`");
	$sched_set = array_column($sched_set_qry->getResult('array'),'meta_value','meta_field');
	$morning_start = date("Y-m-d ") . explode(',',$sched_set['morning_schedule'])[0];
	$morning_end = date("Y-m-d ") . explode(',',$sched_set['morning_schedule'])[1];
	$afternoon_start = date("Y-m-d ") . explode(',',$sched_set['afternoon_schedule'])[0];
	$afternoon_end = date("Y-m-d ") . explode(',',$sched_set['afternoon_schedule'])[1];
	$sched_time = date("Y-m-d ") . date("H:i",strtotime($date_scheduled));
	if(!in_array(strtolower(date("l",strtotime($date_scheduled))),explode(',',strtolower($sched_set['day_schedule'])))){
		$resp['status'] = 'failed';
		$resp['msg'] = "Selected Schedule Day of Week is invalid.";
		return json_encode($resp);
		exit;
	}
	if(!( (strtotime($sched_time) >= strtotime($morning_start) && strtotime($sched_time) <= strtotime($morning_end)) || (strtotime($sched_time) >= strtotime($afternoon_start) && strtotime($sched_time) <= strtotime($afternoon_end)) )){
		$resp['status'] = 'failed';
		$resp['msg'] = "Selected Schedule Time is invalid.";
		return json_encode($resp);
		exit;
	}
	/*$check = $db->query("SELECT * FROM `appointments` where ('".strtotime($date_scheduled)."' Between unix_timestamp(date_scheduled) and unix_timestamp(DATE_ADD(date_scheduled, interval 30 MINUTE)) OR '".strtotime($date_scheduled.' +30 mins')."' Between unix_timestamp(date_scheduled) and unix_timestamp(DATE_ADD(date_scheduled, interval 30 MINUTE))) ".($appointment_id >0 ? " and id != '{$appoinmtent_id}' " : ""))->num_rows;
	$this->capture_err();
	if($check > 0){
		$resp['status'] = 'failed';
		$resp['msg'] = "Selected Schedule DateTime conflicts to other appointment.";
		return json_encode($resp);
		exit;
	}*/
	if(empty($patient_id))
	$sql = "INSERT INTO `users` set first_name = '{$first_name}'  ";
	else
	$sql = "UPDATE `users` set first_name = '{$first_name}' where user_id = '{$patient_id}'  ";
	$save_inv = $db->query($sql);
	//$this->capture_err();
	if($save_inv){
		$patient_id = (empty($patient_id))? $this->conn->insert_id : $patient_id;
		if(empty($id))
		$sql = "INSERT INTO `appointments` set date_scheduled = '{$date_scheduled}',`appointment_reason` = '{$appointment_reason}', `first_name` = '{$first_name}',`last_name` = '{$last_name}',`email` = '{$email}',`phone` = '{$phone}',`hospital` = '{$hospital}', `gender` = '{$gender}',`patient_id` = '{$patient_id}' ";
		else
		$sql = "UPDATE `appointments` set date_scheduled = '{$date_scheduled}',`appointment_reason` = '{$appointment_reason}', `first_name` = '{$first_name}',`last_name` = '{$last_name}',`email` = '{$email}',`phone` = '{$phone}',`hospital` = '{$hospital}', `gender` = '{$gender}',`patient_id` = '{$patient_id}' where id = '{$id}' ";

		$save_sched = $db->query($sql);
		 echo view('appSuccess');
		$data = "";
		foreach($_POST as $k=> $v){
			if(!in_array($k,array('lid','date_scheduled','status','appointment_reason'))){
				if(!empty($data)) $data .=", ";
				$data .= " ({$patient_id},'{$k}','{$v}')";
			}
		}
		/*$sql = "INSERT INTO `patient_meta` (patient_id,meta_field,meta_value) VALUES $data ";
		$this->conn->query("DELETE FROM `patient_meta` where patient_id = '{$patient_id}'");
		$save_meta = $this->conn->query($sql);
		//$this->capture_err();
		if($save_sched && $save_meta){
			$resp['status'] = 'success';
			$resp['name'] = $name;
			$this->settings->set_flashdata('success',' Appointment successfully saved');
		}else{
			$resp['status'] = 'failed';
			$resp['msg'] = "There's an error while submitting the data.";
		}

	}else{
		$resp['status'] = 'failed';
		$resp['msg'] = "There's an error while submitting the data.";
	}
	return json_encode($resp);*/
	
	
	
    
   
   
   
}
}


public function view($id){
	$appointments = new appointmentsModel();
	$data['appointment']=$appointments->find($id);
	return view('appointments/details', $data);

}
}


?>