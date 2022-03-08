<?php namespace App\Models;

use CodeIgniter\Model;

class seller extends Model{
  protected $table = 'sellers';
  protected $primaryKey="seller_id";
  protected $allowedFields = [
      'first_name', 
      'last_name',
       'Address_1',
       'Address_2',
       'District',
       'constituency',
       'phone_number',
       'email',
       'age',
       'gender',
       'legal',
       'user_id',
       'property_type'
        


        
     ];
  
  
 
}
  ?>