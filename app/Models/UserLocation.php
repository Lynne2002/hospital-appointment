<?php namespace App\Models;

use CodeIgniter\Model;

class UserLocation extends Model{
  protected $table = 'user_locations';
  protected $primaryKey="user_location_id";
  protected $allowedFields = [
      'lat', 
      'lng',
    'user_id'
       
        
  ];

        
  
}
  
  
 

  ?>