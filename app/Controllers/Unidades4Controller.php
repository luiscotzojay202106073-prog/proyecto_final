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
    public function agregarUnidad4(){
        $unidad4 = new Unidades4Model();
        $datos = [
            'carne_alumno'=>$this->request->getPost('txt_carne'),
            'curso_1'=>$this->request->getPost('txt_curso1'),
            'curso_2'=>$this->request->getPost('txt_curso2'),
            'curso_3'=>$this->request->getPost('txt_curso3'),
            'curso_4'=>$this->request->getPost('txt_curso4'),
            'curso_5'=>$this->request->getPost('txt_curso5')
        ];

        $unidad4->insert($datos);
        return $this->index();
    }
    public function eliminarUnidad4($id){
        $unidad4 = new Unidades4Model();
        $unidad4->delete($id);
        return $this->index();
     }
    public function buscarUnidad4($codigo){
        $unidad4 = new Unidades4Model();
        $datos['datos']=$unidad4->where('carne_alumno',$codigo)->first();
        return view('form_editar_unidad3',$datos);
    }

    public function modificarUnidad4(){
        $unidad4 = new Unidades4Model();
        $datos = [
            'curso_1'=>$this->request->getPost('txt_curso1'),
            'curso_2'=>$this->request->getPost('txt_curso2'),
            'curso_3'=>$this->request->getPost('txt_curso3'),
            'curso_4'=>$this->request->getPost('txt_curso4'),
            'curso_5'=>$this->request->getPost('txt_curso5')
        ];

        $codigo = $this->request->getPost('txt_carne');
        $unidad3->update($codigo, $datos);
        return $this->index();
    }
}