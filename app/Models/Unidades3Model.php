<?php

namespace App\Models;

use CodeIgniter\Model;

class Unidades3Model extends Model
{
    protected $table         = 'unidad3';
    protected $primaryKey = 'carne_alumno';
    protected $allowedFields = [
        'carne_alumno', 'curso_1', 'curso_2', 'curso_3', 'curso_4', 'curso_5'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}