<?php

namespace App\Controllers;
use App\Models\TiposusuariosModel;

class TiposusuariosController extends BaseController
{
    public function index(): string
    {
        $tiposusuarios = new TiposusuariosModel();
        $datos['datos'] = $tiposusuarios->findAll();
        return view('tiposusuarios',$datos);
    }
    
}