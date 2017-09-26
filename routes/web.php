<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('doctors', 'DoctorController');

Route::resource('patients', 'PatientController');

Route::resource('appointments', 'AppointmentController');

Route::get('doctorsjson', function (){
	$term = strtolower(Input::get('name'));
	$doctors = Doctor::where('name','LIKE','%'.$term.'%')->get();
	$return_array = array();
	foreach ($doctors as $tag) {
		$return_array[] = ['id' => $tag->id, 'name' => $tag->name];
	}
	return Response::json($return_array);
});

Route::get('patientsjson', function (){
	$term = strtolower(Input::get('name'));
	$patients = Patient::where('name','LIKE','%'.$term.'%')->get();
	$return_array = array();
	foreach ($patients as $tag) {
		$return_array[] = ['id' => $tag->id, 'name' => $tag->name];
	}
	return Response::json($return_array);
});