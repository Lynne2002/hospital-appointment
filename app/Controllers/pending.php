<?php
 
namespace App\Controllers;
use App\Models\seller;

 
 
class pending extends BaseController {
 
 
    public function index() {
        $conn = mysqli_connect('localhost','root','','real_estate');
        $query = mysqli_query($conn,"SELECT * FROM sellers WHERE status='Pending'");
        $sellers = new seller();
        $data['sellers'] = $sellers->findAll();
        
        return view('seller_approval/pending', $data);
    }
}