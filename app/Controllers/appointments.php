<?php
 
namespace App\Controllers;
//use App\Models\seller_homes;
use App\Models\appointmentsModel;

 
 
class appointments extends BaseController {
    private $db;


public function __construct()
{
  $this->db = db_connect();
}
public function index(){
   $builder = $this->db->table("appointments as appointments");
 
 $builder->select('appointments.first_name, appointments.last_name, appointments.email,appointments.appointment_reason, appointments.date_scheduled, appointments.gender');
 //$builder->select('seller_homes.home_image', 'seller_homes.address, seller_homes.patient_id');
 $builder->select('appointments.status');
 $builder->select('users.user_id');
 
  
   //$builder->join('seller_homes as seller_homes', 'seller_homes.patient_id = appointments.patient_id');
   $builder->join('users as users', 'appointments.patient_id = users.user_id');
  
   $data['appointments'] = $builder->get()->getResult();


   return view('doctor/appointments/index', $data);
   //$array = json_decode(json_encode($data), true);
  //echo "<pre>";
  
  //print_r($data);

}
public function approve($patient_id){
    $conn = mysqli_connect('localhost','root','','hospital');
    $builder = $this->db->table("appointments as appointments");
    $builder->select('appointments.first_name, appointments.last_name, appointments.email,appointments.appointment_reason, appointments.date_scheduled, appointments.gender','appointments.patient_id');
    $data['appointments'] = $builder->get()->getResult();

	$add_to_db = mysqli_query($conn,"UPDATE appointments SET status='Accepted' WHERE patient_id=$patient_id");

				if($add_to_db){	
					return redirect()->to('appointments')->with('status','Appointment added successfully');
				}
				else{
					echo "Query Error : " . "UPDATE appointments SET status='Accepted' WHERE patient_id=$patient_id" . "<br>" . mysqli_error($conn);
				}
	

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
}
public function reject($patient_id){
    $conn = mysqli_connect('localhost','root','','hospital');
    $builder = $this->db->table("appointments as appointments");
    $builder->select('appointments.first_name, appointments.last_name, appointments.email,appointments.status, appointments.date_scheduled, appointments.gender','appointments.patient_id');
    $data['appointments'] = $builder->get()->getResult();

	$add_to_db = mysqli_query($conn,"UPDATE appointments SET status='Rejected' WHERE patient_id=$patient_id");

				if($add_to_db){	
					return redirect()->to('appointments')->with('status','Home added successfully');
				}
				else{
					echo "Query Error : " . "UPDATE appointments SET status='Rejected' WHERE patient_id=$patient_id" . "<br>" . mysqli_error($conn);
				}
	

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
}
}