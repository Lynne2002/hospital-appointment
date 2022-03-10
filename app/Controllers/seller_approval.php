<?php
 
namespace App\Controllers;
use App\Models\seller_homes;
use App\Models\seller;

 
 
class seller_approval extends BaseController {
    private $db;


public function __construct()
{
  $this->db = db_connect();
}
public function index(){
   $builder = $this->db->table("sellers as sellers");
 
 $builder->select('sellers.first_name, sellers.last_name, sellers.legal,sellers.property_type');
 $builder->select('seller_homes.home_image', 'seller_homes.address, seller_homes.user_id');
 $builder->select('sellers.status');
 $builder->select('users.user_id');
 
  
   $builder->join('seller_homes as seller_homes', 'seller_homes.user_id = sellers.user_id');
   $builder->join('users as users', 'sellers.user_id = users.user_id');
  
   $data['sellers'] = $builder->get()->getResult();


   return view('seller_approval/index', $data);
   //$array = json_decode(json_encode($data), true);
  //echo "<pre>";
  
  //print_r($data);

}
public function approve($user_id){
    $conn = mysqli_connect('localhost','root','','real_estate');
    $builder = $this->db->table("sellers as sellers");
    $builder->select('sellers.first_name, sellers.last_name, sellers.legal,sellers.property_type','sellers.user_id');
    $data['sellers'] = $builder->get()->getResult();

	$add_to_db = mysqli_query($conn,"UPDATE sellers SET status='Accepted' WHERE user_id=$user_id");

				if($add_to_db){	
					return redirect()->to('seller_approval')->with('status','Home added successfully');
				}
				else{
					echo "Query Error : " . "UPDATE sellers SET status='Accepted' WHERE user_id=$user_id" . "<br>" . mysqli_error($conn);
				}
	

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
}
public function reject($user_id){
    $conn = mysqli_connect('localhost','root','','real_estate');
    $builder = $this->db->table("sellers as sellers");
    $builder->select('sellers.first_name, sellers.last_name, sellers.legal,sellers.property_type','sellers.user_id');
    $data['sellers'] = $builder->get()->getResult();

	$add_to_db = mysqli_query($conn,"UPDATE sellers SET status='Rejected' WHERE user_id=$user_id");

				if($add_to_db){	
					return redirect()->to('seller_approval')->with('status','Home added successfully');
				}
				else{
					echo "Query Error : " . "UPDATE sellers SET status='Rejected' WHERE user_id=$user_id" . "<br>" . mysqli_error($conn);
				}
	

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
}
}