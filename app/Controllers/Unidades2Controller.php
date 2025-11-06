<?php

namespace App\Controllers;
use App\Models\Unidades2Model;

class Unidades2Controller extends BaseController
{
    public function index(): string
    {
        $unidades2 = new Unidades2Model();
        $datos['datos'] = $unidades2->findAll();
        return view('unidades2',$datos);
    }
    
}