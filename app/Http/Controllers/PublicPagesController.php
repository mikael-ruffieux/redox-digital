<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function returnDigitalServices() {
        return view("view_example_page");
    }
}
