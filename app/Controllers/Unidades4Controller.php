<?php

namespace App\Controllers;
use App\Models\Unidades4Model;

class Unidades4Controller extends BaseController
{
    public function index(): string
    {
        $unidades4 = new Unidades4Model();
        $datos['datos'] = $unidades4->findAll();
        return view('unidades4',$datos);
    }
    
}