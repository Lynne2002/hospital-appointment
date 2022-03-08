<?php

namespace App\Controllers;

class chat extends BaseController
{
    public function index()
    {
       echo view ('chat/index');
    }
}