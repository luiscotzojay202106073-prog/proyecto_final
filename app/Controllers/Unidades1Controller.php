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
    
    public function agregarUnidad1(){
        $unidad1 = new Unidades1Model();
        $datos = [
            'carne_alumno'=>$this->request->getPost('txt_carne'),
            'curso_1'=>$this->request->getPost('txt_curso1'),
            'curso_2'=>$this->request->getPost('txt_curso2'),
            'curso_3'=>$this->request->getPost('txt_curso3'),
            'curso_4'=>$this->request->getPost('txt_curso4'),
            'curso_5'=>$this->request->getPost('txt_curso5')
        ];

        $unidad1->insert($datos);
        return $this->index();
    }
   
    public function eliminarUnidad1($id){
        $unidad1 = new Unidades1Model();
        $unidad1->delete($id);
        return $this->index();
    }
    
     public function buscarUnidad1($codigo){
        $unidad1 = new Unidades1Model();
        $datos['datos']=$unidad1->where('carne_alumno',$codigo)->first();
        return view('form_editar_unidad1',$datos);
    }

    public function modificarUnidad1(){
        $unidad1 = new Unidades1Model();
        $datos = [
            'curso_1'=>$this->request->getPost('txt_curso1'),
            'curso_2'=>$this->request->getPost('txt_curso2'),
            'curso_3'=>$this->request->getPost('txt_curso3'),
            'curso_4'=>$this->request->getPost('txt_curso4'),
            'curso_5'=>$this->request->getPost('txt_curso5')
        ];

        $codigo = $this->request->getPost('txt_carne');
        $unidad1->update($codigo, $datos);
        return $this->index();
    }
}