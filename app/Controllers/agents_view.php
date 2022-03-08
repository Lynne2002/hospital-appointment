<?php
 
namespace App\Controllers;
use App\Models\agents;

 
 
class agents_view extends BaseController {
 
 
    public function index() {
         
        $agents = new agents();
        $data['agents'] = $agents->findAll();

        return view('agents_view', $data);
    }
}