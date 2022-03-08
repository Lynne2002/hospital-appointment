<?php namespace App\Models;

use CodeIgniter\Model;

class contactusModel extends Model{
  protected $table = 'tbl_messages';
  protected $primaryKey="message_id";
  protected $allowedFields = ['firstname', 'lastname', 'email', 'message', 'description']; 




  
}