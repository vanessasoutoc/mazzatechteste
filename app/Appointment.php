<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\Patient;

class Appointment extends Model
{
    protected $fillable = [
        'id', 'doctor_id', 'patient_id', 'appointment_date',
    ];

    public function doctor(){
    	return $this->belongsTo('App\Models\Doctor');
    }

    public function patient(){
    	return $this->belongsTo('App\Models\Patient');
    }

    protected $casts = [
        'doctor_id' => 'string',
        'patient_id' => 'string',
        'appointment_date' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'patient_id' => 'required',
        'appointment_date' => 'required',
    ];
}
