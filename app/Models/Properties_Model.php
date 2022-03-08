<?php namespace App\Models;

use CodeIgniter\Model;

class Properties_Model extends Model{
  protected $table = 'tbl_properties';
  protected $primaryKey="property_id";
  protected $allowedFields = [
      'location', 
      'home_price',
       'home_image',
       'bedrooms',
       'bathrooms',
       'address',
       'size',
       'property_type'
        


        
     ];
  
  
 
}
  ?>