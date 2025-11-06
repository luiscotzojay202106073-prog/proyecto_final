<?php

namespace App\Models;

use CodeIgniter\Model;

class TiposusuariosModel extends Model
{
    protected $table         = 'tipos_usuarios';
    protected $primaryKey = 'tipo_usuario_id';
    protected $allowedFields = [
        'tipo_usuario_id', 'nombre', 'descripcion'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}