<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('frontview.home.homecontent');
    }
    public function about(){
    	return view('frontview.home.aboutcontent');
    }
    public function department(){
    	return view('frontview.home.departmentcontent');
    }
    public function contact(){
    	return view('frontview.home.contactcontent');
    }
}
