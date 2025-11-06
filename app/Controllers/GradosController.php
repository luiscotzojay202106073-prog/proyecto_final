<?php

namespace App\Controllers;
use App\Models\GradosModel;

class GradosController extends BaseController
{
    public function index(): string
    {
        $grados = new GradosModel();
        $datos['datos'] = $grados->findAll();
        return view('grados',$datos);
    }
    
}