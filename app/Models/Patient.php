<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Carbon;

/**
 * Class Patient
 * @package App\Models
 * @version September 25, 2017, 10:16 am UTC
 *
 * @property string name
 * @property string cpf
 * @property string cellphone
 * @property string email
 * @property date birth
 */
class Patient extends Model
{

    public $table = 'patients';
    


    public $fillable = [
        'name',
        'cpf',
        'cellphone',
        'email',
        'birth'
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'cpf' => 'string',
        'cellphone' => 'string',
        'email' => 'string',
        'birth' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'cpf' => 'required'
    ];

    
}
