<?php namespace App\Models;

use CodeIgniter\Model;

class house_tour extends Model{
  protected $table = 'house_tours';
  protected $primaryKey="tour_id";
  protected $allowedFields = [
    'first_name', 
    'last_name',
     'time',
     'agent',
    'user_id',
     'phone_number',
     'email',
     'age',
     'gender',
     
      


        
     ];
  
  
 
}
  ?>