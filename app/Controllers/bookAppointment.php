<?php namespace App\Controllers;
use App\Models\HospitalModel;
use App\Models\appointmentsModel;
use App\Controllers\nearest;
use App\Models\scheduleModel;
 
class bookAppointment extends BaseController {
public function index($id){
    $hospitals = new HospitalModel();
  
    $data['hospitals']=$hospitals->find($id);
    return view('bookApp', $data);

}
public function store(){
    $schedule= new scheduleModel();
         $appointments= new appointmentsModel();
        $db =db_connect();
        extract($_POST);
		$sched_set_qry = $db->query("SELECT * FROM `schedule_settings`");
        //$sched_set =$sched_set_qry ->findAll();
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
		$check = $db->query("SELECT * FROM `appointments` where ('".strtotime($date_scheduled)."' Between unix_timestamp(date_scheduled) and unix_timestamp(DATE_ADD(date_scheduled, interval 30 MINUTE)) OR '".strtotime($date_scheduled.' +30 mins')."' Between unix_timestamp(date_scheduled) and unix_timestamp(DATE_ADD(date_scheduled, interval 30 MINUTE))) ".($patient_id >0 ? " and patient_id != '{$patient_id}' " : ""))->getNumRows();
		return json_encode($check);
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Selected Schedule DateTime conflicts to other appointment.";
			return json_encode($resp);
			exit;
		}
		if(empty($patient_id))
		$sql = "INSERT INTO `users` set first_name = '{$first_name}'  ";
		else
		$sql = "UPDATE `users` set first_name = '{$first_name}' where user_id = '{$patient_id}'  ";
		$save_inv = $db->query($sql);
		//$this->capture_err();
		if($save_inv){
			$patient_id = (empty($patient_id))? $db->insert_id : $patient_id;
			if(empty($appointment_id))
			$sql = "INSERT INTO `appointments` set date_scheduled = '{$date_scheduled}',`appointment_reason` = '{$appointment_reason}', `first_name` = '{$first_name}',`last_name` = '{$last_name}',`email` = '{$email}',`phone` = '{$phone}',`hospital` = '{$hospital}', `gender` = '{$gender}',`patient_id` = '{$patient_id}'  ";
			else
			$sql = "UPDATE `appointments` set date_scheduled = '{$date_scheduled}',`appointment_reason` = '{$appointment_reason}',`first_name` = '{$first_name}',`last_name` = '{$last_name}', `email` = '{$email}',`phone` = '{$phone}',`hospital` = '{$hospital}',`gender` = '{$gender}',`patient_id` = '{$patient_id}' where appointment_id = '{$appointment_id}' ";

			$save_sched = $db->query($sql);
			//$this->capture_err();
			$data = "";
			foreach($_POST as $k=> $v){
				if(!in_array($k,array('lid','date_scheduled','status','appointment_reason'))){
					if(!empty($data)) $data .=", ";
					$data .= " ({$patient_id},'{$k}','{$v}')";
				}
			}
			/*$sql = "INSERT INTO `patient_meta` (patient_id,meta_field,meta_value) VALUES $data ";
			$db->query("DELETE FROM `patient_meta` where patient_id = '{$patient_id}'");
			$save_meta = $db->query($sql);
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
		}*/
		//return json_encode($resp);
	
	
	
    
   
    /*$data=[
        'first_name'=>$this->request->getPost('first_name'),
        'last_name'=>$this->request->getPost('last_name'),
        'email'=>$this->request->getPost('email'),
        'phone'=>$this->request->getPost('phone'),
        'gender'=>$this->request->getPost('gender'),
       
         'date_scheduled'=>$this->request->getPost('date_scheduled'),
         'appointment_reason'=>$this->request->getPost('appointment_reason'),
        
        'hospital'=>$this->request->getPost('hospital'),
        'patient_id'=>$this->request->getPost('patient_id'),
    
        
    ];
    $appointments->save($data);
    return redirect()->to(base_url('homepage'))->with('status', 'appointment Added Successfully');*/
}
}
public function view($id){
	/*
$appointments = new appointmentsModel();
	
		$data = [
		'first_name' => $this->request->getVar('first_name'),
		'last_name' => $this->request->getVar('last_name'),
		'phone' => $this->request->getVar('phone'),
		'email' => $this->request->getVar('email'),
		'date_scheduled' => $this->request->getVar('date_scheduled'),
		];
	
	
  
   $appointment_id=$this->request->getVar('appointment_id');
   $model->find($appointment_id, $data);
    return json_encode('appointments/details', $model);
*/
	$appointments = new appointmentsModel();
  
    $data['appointments']=$appointments->find($id);
    return view('appointments/details', $data);

}
}


?>
