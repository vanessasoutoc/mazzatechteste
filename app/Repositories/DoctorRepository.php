<?php

namespace App\Repositories;

use App\Models\Doctor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DoctorRepository
 * @package App\Repositories
 * @version September 24, 2017, 2:04 pm UTC
 *
 * @method Doctor findWithoutFail($id, $columns = ['*'])
 * @method Doctor find($id, $columns = ['*'])
 * @method Doctor first($columns = ['*'])
*/
class DoctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'crm',
        'cellphone'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Doctor::class;
    }
}
