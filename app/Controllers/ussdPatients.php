<?php namespace App\Controllers;
class ussdPatients extends BaseController{
    public function index(){
        $db = db_connect();
        $query = $db->query("SELECT name, phone, ID_No FROM users_ussd");
        $data['patients'] = $query->getResult('array');
        
       
         return view('doctor/patients/ussd', $data);

    }
}
?>