<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catagory;
use App\inhospital;
use App\inhome;
use App\relative;
use App\petentbed;
use App\pathologihospital;
use App\pathologihome;

class CatagoeryController extends Controller
{
    public function index(){
    	return view('admin.catagory.categoryentry');
    }

    public function save(Request $request){
    	$Catagories = new catagory();

    	$Catagories->catagory_name = $request->name;
    	$Catagories->sortdescription = $request->sortdescription;
    	$Catagories->publicationststus = $request->publicationstatus;

    	$Catagories->save();

    	return redirect('/catagory/save')->with('massage','Data Inseart Sucessfully');
    }

     public function inhospital(){
        return view('user.apointment.inhospital');
    }
    public function inhospitalform(request $request){
        $inhospital = new inhospital();

        $inhospital->patient_name= $request->patient_name;
        $inhospital->date= $request->date;
        $inhospital->doctor_name= $request->doctor_name;
        $inhospital->time= $request->time;

        $inhospital->save();

        return redirect('/doctor/inhospital')->with('massage','Appointment Seccessfully Create');
    }
    public function inhome(){
        return view('user.apointment.inhome');
    }

    public function inhomeform(request $request){
        $inhome = new inhome();

        $inhome->catagory= $request->catagory;
        $inhome->doctor_name= $request->doctor_name;
        $inhome->time= $request->time;
        $inhome->date= $request->date;
        $inhome->patient_name= $request->patient_name;
        $inhome->age= $request->age;
        $inhome->gender= $request->gender;
        $inhome->address= $request->address;
        $inhome->number= $request->number;

        $inhome->save();

        return redirect('/apointment/inhome')->with('massage','Appointment Seccessfully Create');
    }

    public function relative(){
        return view('user.reservation.relative');
    }

    public function relativeform(request $request){
        //dd($request->all());
        $relative = new relative();

        $relative->name= $request->name;
        $relative->email= $request->email;
        $relative->number= $request->number;
        $relative->room= $request->room;
        $relative->beds= $request->beds;
        $relative->indate= $request->indate;
        $relative->outdate= $request->outdate;
       
        

        $relative->save();

        return redirect('/reservation/relative')->with('massage','Rservation Seccessfully Create');
    }

    public function patentbed(){
        return view('user.reservation.petentbed');
    }

    public function patentbedform(request $request){
        //dd($request->all());
        $petentbed = new petentbed();

        $petentbed->name= $request->name;
        $petentbed->email= $request->email;
        $petentbed->number= $request->number;
        $petentbed->beds= $request->beds;
        $petentbed->indate= $request->indate;

        $petentbed->save();

        return redirect('/reservation/patentbed')->with('massage','Bed Seccessfully Booked');
    }
    public function pathologihospital(){
        return view('user.pathologies.inhospital');
    }
    
    public function pathologihospitalform(request $request){
        //dd($request->all());
        $pathologihospital = new pathologihospital();

        $pathologihospital->patient_name= $request->patient_name;
        $pathologihospital->date= $request->date;
        $pathologihospital->pathologist_name= $request->pathologist_name;
        $pathologihospital->time= $request->time;

        $pathologihospital->save();

        return redirect('/pathologies/inhospital')->with('massage','Appointment Seccessfully Create');
    }
    public function pathologihome(){
        return view('user.pathologies.inhome');
    }

    public function pathologihomeform(request $request){
        //dd($request->all());
        $pathologihome = new pathologihome();

        $pathologihome->catagory= $request->catagory;
        $pathologihome->pathology_name= $request->pathology_name;
        $pathologihome->time= $request->time;
        $pathologihome->date= $request->date;
        $pathologihome->patient_name= $request->patient_name;
        $pathologihome->age= $request->age;
        $pathologihome->gender= $request->gender;
        $pathologihome->address= $request->address;
        $pathologihome->number= $request->number;

        $pathologihome->save();

        return redirect('/pathologies/inhome')->with('massage','Appointment Seccessfully Create');
    }

    public function doctor(){
        return view('user.report.doctor');
    }

    public function pathologiest(){
        return view('user.report.pathologiest');
    }
    

}
