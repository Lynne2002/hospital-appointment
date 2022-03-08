<?php namespace App\Models;

use CodeIgniter\Model;

class home_details extends Model{
  protected $table = 'tbl_home_details';
  protected $primaryKey="home_id";
  protected $allowedFields = [
     
      'home_price',
       'home_image',
       'district',
       'constituency',

       'bedrooms',
       'bathrooms',
       'address',
       'size',
        'first_name',
        'last_name',
'user_id'

        
     ];
  
  
 
}
  ?>