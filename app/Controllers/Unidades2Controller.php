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

    public function agregarUnidad2(){
        $unidad2 = new Unidades2Model();
        $datos = [
            'carne_alumno'=>$this->request->getPost('txt_carne'),
            'curso_1'=>$this->request->getPost('txt_curso1'),
            'curso_2'=>$this->request->getPost('txt_curso2'),
            'curso_3'=>$this->request->getPost('txt_curso3'),
            'curso_4'=>$this->request->getPost('txt_curso4'),
            'curso_5'=>$this->request->getPost('txt_curso5')
        ];

        $unidad2->insert($datos);
        return $this->index();
    }
    
    public function eliminarUnidad2($id){
        $unidad2 = new Unidades2Model();
        $unidad2->delete($id);
        return $this->index();
    }

    public function buscarUnidad2($codigo){
        $unidad2 = new Unidades2Model();
        $datos['datos']=$unidad2->where('carne_alumno',$codigo)->first();
        return view('form_editar_unidad2',$datos);
    }

    public function modificarUnidad2(){
        $unidad2 = new Unidades2Model();
        $datos = [
            'curso_1'=>$this->request->getPost('txt_curso1'),
            'curso_2'=>$this->request->getPost('txt_curso2'),
            'curso_3'=>$this->request->getPost('txt_curso3'),
            'curso_4'=>$this->request->getPost('txt_curso4'),
            'curso_5'=>$this->request->getPost('txt_curso5')
        ];

        $codigo = $this->request->getPost('txt_carne');
        $unidad2->update($codigo, $datos);
        return $this->index();
    }
}