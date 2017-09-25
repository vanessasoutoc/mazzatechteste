<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Doctor
 * @package App\Models
 * @version September 24, 2017, 2:04 pm UTC
 *
 * @property string name
 * @property string crm
 */
class Doctor extends Model
{

    public $table = 'doctors';
    


    public $fillable = [
        'name',
        'crm',
        'cellphone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'crm' => 'string',
        'cellphone' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'crm' => 'required',
        'cellphone' => 'required',
    ];

    
}
