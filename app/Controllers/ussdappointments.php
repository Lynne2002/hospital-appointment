<?php
 
namespace App\Controllers;
//use App\Models\seller_homes;
use App\Models\ussd_bookingModel;

 
 
class ussdappointments extends BaseController {
    private $db;


public function __construct()
{
  $this->db = db_connect();
}
public function index(){
   $builder = $this->db->table("ussd_booking as ussd_booking");

 $builder->select('users.name');
 $builder->select('ussd_booking.date, ussd_booking.time, ussd_booking.appointment_reason');
 //$builder->select('seller_homes.home_image', 'seller_homes.address, seller_homes.phone');
 $builder->select('ussd_booking.status');
 $builder->select('users.phone, users.uid');
 
 
  
   //$builder->join('seller_homes as seller_homes', 'seller_homes.phone = ussd_booking.phone');
   $builder->join('users_ussd as users', 'ussd_booking.uid = users.uid');
  
   $data['appointments'] = $builder->get()->getResult();


   return view('doctor/appointments/ussdapp', $data);
   //$array = json_decode(json_encode($data), true);
  //echo "<pre>";
  
  //print_r($data);

}
public function approve($uid){
    $conn = mysqli_connect('localhost','root','','hospital');
    $builder = $this->db->table("users_ussd as users");
    $builder->select('users.name, users.phone' ,'users.phone');
    $data['ussd_booking'] = $builder->get()->getResult();

	$add_to_db = mysqli_query($conn,"UPDATE ussd_booking SET status='Accepted' WHERE uid=$uid");

				if($add_to_db){	
					return redirect()->to('appointmentsussd')->with('status','Appointment added successfully');
				}
				else{
					echo "Query Error : " . "UPDATE ussd_booking SET status='Accepted' WHERE uid=$uid" . "<br>" . mysqli_error($conn);
				}
	

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
}
public function reject($uid){
    $conn = mysqli_connect('localhost','root','','hospital');
    $builder = $this->db->table("users_ussd as users");
    $builder->select('users.name, users.phone');
    $data['ussd_booking'] = $builder->get()->getResult();

	$add_to_db = mysqli_query($conn,"UPDATE ussd_booking SET status='Rejected' WHERE uid=$uid");

				if($add_to_db){	
					return redirect()->to('appointmentsussd')->with('status','Appointment added successfully');
				}
				else{
					echo "Query Error : " . "UPDATE ussd_booking SET status='Rejected' WHERE uid=$uid" . "<br>" . mysqli_error($conn);
				}
	

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
}
}