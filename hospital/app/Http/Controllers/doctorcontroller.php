<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prescription;



class doctorcontroller extends Controller
{
    public function login(){
    	return view('doctor.login');
    }

    public function deshboard(){
    	return view('doctor.doctordeshboard');
    }

    public function prescription(){
    	return view('doctor.prescription');
    }
   	
    public function prescriptionprocess(Request $request){

    	dd($request->all());
    	
    	/*
    	$prescription = new prescription();

    	$prescription->type = $request->type;
    	$prescription->medicin = $request->madicine;
    	$prescription->dosage = $request->dosage;
    	$prescription->meal = $request->meal;
    	$prescription->day = $request->day;
    	$prescription->instraction = $request->instraction;

    	$prescription->save();

    	return redirect('/doctor/prescription')->with('massage1','Prescrib Susseccfully');*/
    }
    
}
