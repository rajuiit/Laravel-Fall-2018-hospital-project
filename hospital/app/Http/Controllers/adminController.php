<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminregister;
use DB;
use Session;
use Redirect;
use App\User;
use App\doctor;

class adminController extends Controller
{
    public function login(){
    	return view('backend.login');
    }
    public function loginprocess(Request $request){
        $email = $request->email;
        $password =$request->password;
        $result = DB::table('adminregisters')
                ->where('email',$email)
                ->where('password',$password)
                ->first();

        if($result ){
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            return Redirect::to('/backend/homecentent');
        }
        else{
            Session::put('exception','Email or Password Invalide');
            return Redirect::to('/backend/login')->with('massage','Email or Password Invalide');;
        }

    }


    public function register(){
    	return view('backend.registration');
    }
    public function registerprocess(Request $request){
    	$adminregister = new adminregister();

    	$adminregister->name = $request->name;
    	$adminregister->email = $request->email;
    	$adminregister->password = $request->password;

    	$adminregister->save();

    	return redirect('/backend/register')->with('massage','New Admin Create Susseccfully');
    }
    public function deshboard(){
        return view('backend.homecontent');
    }
    public function allpetent(){

        $allpetent = User::all();
        return view('backend.allpetent',['allpetent'=>$allpetent]);
    }
    public function alladmin(){

        $alladmin = adminregister::all();
        return view('backend.alladmin',['alladmin'=>$alladmin]);
    }

    public function petentedit($id){
        $petentedit = User::where('id',$id)->first();
        return view('backend.petentedit',['petentedit'=>$petentedit]);
    }
    public function petentupdate(Request $request ){
       $updatepetent = User::find($request->petenteditid);
       $updatepetent->name=$request->name;
       $updatepetent->address=$request->address;
       $updatepetent->email=$request->email;
       $updatepetent->age=$request->age;
       $updatepetent->save();
       return redirect('/backend/allpetent')->with('message','Update Susseccfully');
    }
    public function adminedit($id){
        $adminedit = adminregister::where('id',$id)->first();
        return view('backend.adminedit',['adminedit'=>$adminedit]);
    }
    

    public function adminupdate(Request $request ){
       $updateadmin = adminregister::find($request->admineditid);
       $updateadmin->name=$request->name;
       $updateadmin->email=$request->email;
       $updateadmin->password=$request->password;
       $updateadmin->save();
       return redirect('/backend/alladmin')->with('message','Update Susseccfully');
    }

    public function admindelete($id){
        $admindelete = adminregister::find($id);
        $admindelete->delete();
        return redirect('/backend/alladmin')->with('message','Delete Susseccfully');
    }
     public function petentdelete($id){
        $petentdelete = User::find($id);
        $petentdelete->delete();
        return redirect('/backend/allpetent')->with('message','Delete Susseccfully');
    }

     public function doctorregister(){
        return view('backend.doctorregister');
    }
    public function doctorregisterprocess(Request $request){
        //dd($request->all());
        $doctor = new doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->designation = $request->designation;
        $doctor->number = $request->number;
        $doctor->address = $request->address;
        $doctor->gender = $request->gender;
        $doctor->password = $request->password;

        $doctor->save();

        return redirect('/backend/doctorregister')->with('massage','New Doctor Create Susseccfully');
    }
    public function alldoctor(){
        $alldoctor = doctor::all();
        return view('backend.alldoctor',['alldoctor'=>$alldoctor]);
    }
    public function doctoredit($id){
        $doctoredit = doctor::where('id',$id)->first();
        return view('backend.doctoredit',['doctoredit'=>$doctoredit]);
    }
    public function doctorupdate(Request $request ){
        //dd($request->all());
       $updatedoctor = doctor::find($request->doctoreditid);
       $updatedoctor->name=$request->name;
       $updatedoctor->email=$request->email;
       $updatedoctor->designation=$request->designation;
       $updatedoctor->number=$request->number;
       $updatedoctor->address=$request->address;
       $updatedoctor->password=$request->password;
       $updatedoctor->save();
       return redirect('/backend/alldoctor')->with('message','Update Susseccfully');
    }
    public function doctordelete($id){
        $doctordelete = doctor::find($id);
        $doctordelete->delete();
        return redirect('/backend/alldoctor')->with('message','Delete Susseccfully');
    }

     public function doctorlogincheck(Request $request){
        $email = $request->email;
        $password =$request->password;
        $result = DB::table('doctors')
                ->where('email',$email)
                ->where('password',$password)
                ->first();

        if($result ){
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            return view('/doctor/doctordeshboard');
        }
        else{
            Session::put('exception','Email or Password Invalide');
            return Redirect::to('/doctor/login')->with('massage','Email or Password Invalide');;
        }

    }
}