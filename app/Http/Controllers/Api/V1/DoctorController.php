<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class DoctorController extends Controller
{

    public function index(){
        $doctors = Doctor::all();
        return response()->json(compact('doctors'));
    }
}