<?php

namespace App\Controllers;
use App\Models\Unidades1Model;

class Unidades1Controller extends BaseController
{
    public function index(): string
    {
        $unidades1 = new Unidades1Model();
        $datos['datos'] = $unidades1->findAll();
        return view('unidades1',$datos);
    }
    
}