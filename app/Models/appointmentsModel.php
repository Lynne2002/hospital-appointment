<?php namespace App\Models;

use CodeIgniter\Model;

class appointmentsModel extends Model{
  protected $table = 'appointments';
  protected $primaryKey="appointment_id";
  protected $allowedFields = [
      'first_name', 
      'last_name', 
      'email',
      'phone',
      'date_scheduled',
      'gender',
      'appointment_reason',
      'added_by',
      'appointment_description', 
      'hospital',
      'added_by'
     
        


        
     ];

    
    
  
  
 
}
  ?>