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
      'hospital',
      'patient_id',
      'appointment_id'
      
     
        


        
     ];

    
    
  
  
 
}
  ?>