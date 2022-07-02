<?php namespace App\Models;

use CodeIgniter\Model;

class HospitalModel extends Model{
  protected $table = 'hospitals';
  protected $primaryKey="hospital_id";
  protected $allowedFields = [
      'hospital_name', 
      'hospital_image',
       'lat',
       'lng',
      'doctors',
      'departments',
      'location',
       'address',
       'added_by'
       
        


        
     ];

    
    
  
  
 
}
  ?>