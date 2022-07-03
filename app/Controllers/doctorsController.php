<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\doctorsModel;
use App\Models\appointmentsModel;
  
class doctorsController extends Controller
{
    public function index()
    {
        //$db = db_connect();
        //$sched_query = $db->query("SELECT a.*FROM `appointments` a");
        //$data['appointments'] = $sched_query->getResult('array');
        //$sched_arr = json_encode($data['appointments']);
        //$sched_query = $conn->query("SELECT a.*,p.name FROM `appointments` a");
        //$sched_arr = json_encode($sched_query->fetch_all(MYSQLI_ASSOC));
        echo view('doctor/index');
    } 
    function load()
 {
    $event_data = new appointmentsModel();
    $data['events']=$event_data->findAll();
  
  
  echo json_encode($data);
 }
}