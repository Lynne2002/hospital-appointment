<?php namespace App\Controllers;
class patientsController extends BaseController{
    public function index(){
        $db = db_connect();
        $query = $db->query("SELECT first_name, last_name, email FROM users WHERE user_type = 'patient'");
        $data['patients'] = $query->getResult('array');
        
       
         return view('doctor/patients/index', $data);

    }
}
?>