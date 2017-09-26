<?php

namespace App\Http\Controllers;

use App\Appointment;
use Log;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = \Carbon\Carbon::now();
        $now = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$now)->format('Y-m-d');
        Log::info($now);
        $appontmentsday = Appointment::where('appointment_date','>=', $now)->with('doctor')->with('patient')->get();

        Log::info($appontmentsday);
        //$appointmentsDay = 
        return view('home', compact('appontmentsday'));
    }
}
