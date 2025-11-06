<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function verMenuDirector()
    {
        return view('menu_director');
    }

    public function verMenuDocente()
    {
        return view('menu_docente');
    }
}