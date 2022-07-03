<?php namespace App\Models;

use CodeIgniter\Model;

class calendar extends Model{
  protected $table = 'appointments';
  protected $primaryKey="appointment_id";
  protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
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
      'status',
      'appointment_id'
      
     
        


        
     ];
     protected $useTimestamps        = false;
     protected $dateFormat           = 'datetime';
     protected $createdField         = 'created_at';
     protected $updatedField         = 'updated_at';
     protected $deletedField         = 'deleted_at';
   
     // Validation
     protected $validationRules      = [];
     protected $validationMessages   = [];
     protected $skipValidation       = false;
     protected $cleanValidationRules = true;
   
     // Callbacks
     protected $allowCallbacks       = true;
     protected $beforeInsert         = [];
     protected $afterInsert          = [];
     protected $beforeUpdate         = [];
     protected $afterUpdate          = [];
     protected $beforeFind           = [];
     protected $afterFind            = [];
     protected $beforeDelete         = [];
     protected $afterDelete          = [];
    
    
  
  
 
}
  ?>