<?php namespace App\Controllers;
use App\Models\appointmentsModel;

class appHistory extends BaseController
{
    public function __construct()
{
  $this->db = db_connect();
}
	public function index($id)
	{
        $appointments = new appointmentsModel();
	$data['appointment']=$appointments->findAll();
        $schedule_array=array();
        $this->db = db_connect();
        $builder = $this->db->table("appointments as appointments");
         
         $builder->select('appointments.first_name, appointments.last_name, appointments.email,appointments.appointment_reason, appointments.date_scheduled, appointments.gender');
         
         $builder->select('appointments.status');
        
         
          
           $builder->join('users as users', 'appointments.patient_id = users.user_id');
           $builder->where('users.user_id', $id);
          
           $data['appointments'] = json_encode($builder->get()->getResult('array'));
        
  return view('appointments/history', $data);



    }
}
    ?>