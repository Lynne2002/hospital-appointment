<?php
 
namespace App\Controllers;
use App\Models\Properties_Model;

 
 
class properties_view extends BaseController {
 
 
    public function index() {
         
        $properties = new Properties_Model();
        $data['properties'] = $properties->findAll();

        return view('properties_view', $data);
    }
}