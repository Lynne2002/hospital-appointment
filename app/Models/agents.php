<?php namespace App\Models;

use CodeIgniter\Model;

class agents extends Model{
  protected $table = 'agents';
  protected $primaryKey="agent_id";
  protected $allowedFields = [
      'first_name', 
      'last_name',
      'email',
       'agent_image',
       'phone',
       'LinkedIn',
       'instagram',
       'twitter',
       'facebook'
        


        
     ];
  
  
 
}
  ?>