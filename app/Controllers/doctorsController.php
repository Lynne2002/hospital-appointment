<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\doctorsModel;
use App\Models\appointmentsModel;
  
class doctorsController extends Controller
{
    public function index()
    {    //$sched_arr = new appointmentsModel();
        /*$db = db_connect();
        $schedule_query = $db->query("SELECT a.* FROM appointments a inner join `users` u on a.patient_id = u.user_id");
        //$sched_arr = json_encode($sched_query->getResult('array'));
        //$data['schedule_array'] = $query->getResult('array');
         $schedule_array = $schedule_query->getResult('array');
         $data['schedule_array'] = $schedule_array;
        json_encode($schedule_array);*/
        $appointment = new appointmentsModel();
        $data['appointment']=$appointment->findAll();

        echo view('doctor/index', $data);
    } 
    function load()
 {
    $appointments = new appointmentsModel();
    $data['events']=$appointments->findAll();
  
  
  echo json_encode($data);
 }
}