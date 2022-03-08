<?php namespace App\Models;

use CodeIgniter\Model;

class featuredhomes extends Model{
  protected $table = 'tbl_featuredhomes';
  protected $primaryKey="home_id";
  protected $allowedFields = [
      'location', 
      'home_price',
       'home_image',
       'bedrooms',
       'bathrooms',
       'address',
       'size',
        


        
     ];
  
  
 
}
  ?>