<?php namespace App\Models;

use CodeIgniter\Model;

class seller_upload extends Model{
  protected $table = 'documents';
  protected $primaryKey="document_id";
  protected $allowedFields = [
      'property_files', 
      'first_name',
      'last_name',
      'user_id'
        


        
     ];
  
  
 
}
  ?>