<?php

namespace App\Controllers;
use App\Models\Unidades3Model;

class Unidades3Controller extends BaseController
{
    public function index(): string
    {
        $unidades3 = new Unidades3Model();
        $datos['datos'] = $unidades3->findAll();
        return view('unidades3',$datos);
    }
    
}