<?php

namespace App\Controllers;
use App\Models\EstudiantesModel;

class EstudiantesController extends BaseController
{
    public function index(): string
    {
        $estudiantes = new EstudiantesModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('estudiantes',$datos);
    }

    public function agregarEstudiante(){
        $estudiantes = new EstudiantesModel();
        $datos = [
            'carne_alumno'=>$this->request->getPost('txt_carne'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'email'=>$this->request->getPost('txt_email'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'fecha_nacimiento'=>$this->request->getPost('txt_nacimiento'),
            'codigo_grado'=>$this->request->getPost('txt_codigo')
        ];
            $estudiantes->insert($datos);
            return $this->index();
    }

    public function eliminarEstudiante($id){
        $estudiante = new EstudiantesModel();
        $estudiante->delete($id);
        return $this->index();
    }

    public function buscarEstudiante($codigo){
        $estudiante = new EstudiantesModel();
        $datos['datos']=$estudiante->where('carne_alumno',$codigo)->first();
        return view('form_editar_estudiante',$datos);
    }

    public function modificarEstudiante(){
        $estudiante = new EstudiantesModel();
        $datos = [
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'email'=>$this->request->getPost('txt_email'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'fecha_nacimiento'=>$this->request->getPost('txt_nacimiento'),
            'codigo_grado'=>$this->request->getPost('txt_codigo')
        ];

        $codigo = $this->request->getPost('txt_carne');
        $estudiante->update($codigo, $datos);
        return $this->index();
    }
    
}