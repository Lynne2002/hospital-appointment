<?php namespace App\Models;

use CodeIgniter\Model;

class departmentsModel extends Model{
  protected $table = 'departments';
  protected $primaryKey="department_id";
  protected $allowedFields = [
      'department_name', 
      'department_description', 
      'hospital',
      'added_by'
     
        


        
     ];

    
    
  
  
 
}
  ?>