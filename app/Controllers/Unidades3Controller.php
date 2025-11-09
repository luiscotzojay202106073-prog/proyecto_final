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
    public function agregarUnidad3(){
        $unidad3 = new Unidades3Model();
        $datos = [
            'carne_alumno'=>$this->request->getPost('txt_carne'),
            'curso_1'=>$this->request->getPost('txt_curso1'),
            'curso_2'=>$this->request->getPost('txt_curso2'),
            'curso_3'=>$this->request->getPost('txt_curso3'),
            'curso_4'=>$this->request->getPost('txt_curso4'),
            'curso_5'=>$this->request->getPost('txt_curso5')
        ];

        $unidad3->insert($datos);
        return $this->index();
    }
    public function eliminarUnidad3($id){
        $unidad3 = new Unidades3Model();
        $unidad3->delete($id);
        return $this->index();
    }
}