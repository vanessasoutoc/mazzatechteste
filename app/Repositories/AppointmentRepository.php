<?php

namespace App\Repositories;

use App\Appointment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PatientRepository
 * @package App\Repositories
 * @version September 25, 2017, 10:16 am UTC
 *
 * @method Patient findWithoutFail($id, $columns = ['*'])
 * @method Patient find($id, $columns = ['*'])
 * @method Patient first($columns = ['*'])
*/
class AppointmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_id',
        'patient_id',
        'appointment_date',
    ];


    /**
     * Configure the Model
     **/
    public function model()
    {
        return Appointment::class;
    }
}
