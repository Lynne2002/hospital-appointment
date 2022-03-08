<?php namespace App\Models;

use CodeIgniter\Model;

class upload_images extends Model{
  protected $table = 'seller_homes';
  protected $primaryKey="seller_home_id";
  protected $allowedFields = [
      'district', 
      'constituency',
      'home_price',
       'home_image',
       'bedrooms',
       'bathrooms',
       'address',
       'size',
       'user_id',
       'first_name',
       'last_name'
        


        
     ];
  
  
 
}
  ?>