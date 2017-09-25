<?php

namespace App\Repositories;

use App\Models\Patient;
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
class PatientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'cpf',
        'cellphone',
        'email',
        'birth'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Patient::class;
    }
}
