<?php namespace App\Controllers;
class scheduleDisplay extends BaseController{
    public function index(){
        $db = db_connect();
        $query = $db->query("SELECT meta_field, meta_value FROM schedule_settings");
        $data['schedule'] = $query->getResult('array');
        
       
         return view('doctor/schedule_settings/home', $data);

    }
}
?>