<?php namespace App\Controllers;
use App\Models\HospitalModel;
use App\Controllers\nearest;
 
class bookAppointment extends BaseController {
public function index($id){
    $hospitals = new HospitalModel();
    $data['hospitals']=$hospitals->find($id);
    return view('bookApp', $data);

}
}

?>