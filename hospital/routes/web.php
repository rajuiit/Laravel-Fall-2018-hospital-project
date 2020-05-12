<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/','FrontController@index')->name('main');
route::get('/about','FrontController@about');
route::get('/department','FrontController@department');
route::get('/contact','FrontController@contact');

Route::get('doctor/deshboard','doctorController@deshboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Catagoery Route

Route::get('/catagory/save','CatagoeryController@index');

Route::post('/catagory/save','CatagoeryController@save'); 


Route::get('/doctor/inhospital','CatagoeryController@inhospital');

Route::post('/doctor/inhospital','CatagoeryController@inhospitalform');

Route::get('/apointment/inhome','CatagoeryController@inhome');


Route::post('/apointment/inhome','CatagoeryController@inhomeform');

Route::get('/reservation/relative','CatagoeryController@relative');

Route::post('/reservation/relative','CatagoeryController@relativeform');

Route::get('/reservation/patentbed','CatagoeryController@patentbed');

Route::post('/reservation/patentbed','CatagoeryController@patentbedform');


Route::get('/pathologies/inhospital','CatagoeryController@pathologihospital');

Route::post('/pathologies/inhospital','CatagoeryController@pathologihospitalform');



Route::get('/pathologies/inhome','CatagoeryController@pathologihome');

Route::post('/pathologies/inhome','CatagoeryController@pathologihomeform');

Route::get('/report/doctor','CatagoeryController@doctor');

Route::get('/report/pathologiest','CatagoeryController@pathologiest');

Route::get('/backend/login','adminController@login');

Route::post('/backend/login','adminController@loginprocess');

Route::get('/backend/register','adminController@register');
Route::post('/backend/register','adminController@registerprocess');
Route::get('/backend/homecentent','adminController@deshboard');
Route::get('/backend/allpetent','adminController@allpetent');
Route::get('/backend/alladmin','adminController@alladmin');

Route::get('backend/petentedit/{id}','adminController@petentedit');

Route::post('backend/petentedit','adminController@petentupdate');

Route::get('backend/adminedit/{id}','adminController@adminedit');

Route::post('backend/adminedit','adminController@adminupdate');

Route::get('backend/admindelete/{id}','adminController@admindelete');

Route::get('backend/petentdelete/{id}','adminController@petentdelete');

Route::get('backend/doctorregister','adminController@doctorregister');

Route::post('backend/doctorregister','adminController@doctorregisterprocess');

Route::get('backend/alldoctor','adminController@alldoctor');

Route::get('backend/doctoredit/{id}','adminController@doctoredit');

Route::post('backend/doctoredit','adminController@doctorupdate');

Route::get('backend/doctordelete/{id}','adminController@doctordelete');

//Doctors
Route::get('doctor/login','doctorController@login');


Route::post('doctor/login','adminController@doctorlogincheck');

Route::get('doctor/deshboard','doctorController@deshboard');

Route::get('doctor/prescription','doctorController@prescription');

Route::post('doctor/prescription','doctorController@prescriptionprocess');