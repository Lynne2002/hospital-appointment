<?php
 
namespace App\Controllers;
use App\Models\UserLocation;
use App\Models\HospitalModel;
use CodeIgniter\Database\Query;


 
class nearest extends BaseController {
    protected $session;
    private $db;
    function __construct()
    {
        
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        


    }
 
    public function index() {
        $db = db_connect();
        $user_location= new UserLocation();
        $hospital= new HospitalModel();

         $data=[
		'lng'=>$this->request->getPost('lng'),
        'lat'=>$this->request->getPost('lat'),
        'user_id'=>$this->request->getPost('user_id'),
         ];
         $v1 = doubleval($data['lat']);
         $v2 = doubleval($data['lng']);
        
        
         $query = $db->query("SELECT hospital_id,address, hospital_name, hospital_image,location, doctors, departments,( 3959 * acos( cos( radians($v1) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($v2) ) + sin( 
            radians($v1) ) * sin( radians( lat ) ) ) ) AS distance FROM hospitals HAVING distance < 25 ORDER BY distance LIMIT 0 , 4" );
        $data['hospitals'] = $query->getResult('array');
        $this->session->set($data);
       
         return view('nearestHospital', $data);
       
       }
        
         

         
    

   


}