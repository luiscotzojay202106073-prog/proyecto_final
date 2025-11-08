<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    public function index()
    {
        $email = $this->request->getPost('txt_usuario');
        $contra = $this->request->getPost('txt_contra');

        $usuarios = new UsuariosModel();
        //select * from usuarios where email = ... and possword = ...
        $datos= $usuarios->where('email',$email)->where('password',$contra)->first();

        if ($datos) {
            //imprimir los datos
            //print_r($datos);

            $sesion=[
                'nombre'=>$datos['nombre'],
                'tipo'=>$datos['tipo_usuario_id'],
                'activa'=>true //esta bandera servirá para ver si se tiene o no acceso a las demás páginas
            ];

            //crear variables de sesion para acceder a ellos desde cualquier página

            session()->set($sesion);

            if ($datos['tipo_usuario_id'] == 1) {
                return view('menu_director');
            }elseif ($datos['tipo_usuario_id'] == 2) {
                return view('menu_docente');
            }else {
                echo ("Tipo de dato desconocido");
            }
        }else{
            //para regresar nuevamente a la página en la que estamos
            return redirect()->to(base_url(''));
        }

        //echo ("Correo: ". $email);
        //echo ("Contra: ". $contra);
    }


    //cerrar sesion
    public function cerrarSesion(){
        //destruye las variables de sesión
        session()->destroy();
        return redirect()->to(base_url(''));
    }
    

    public function mostraru(): string
    {
        $usuarios = new UsuariosModel();
        $datos['datos'] = $usuarios->findAll();
        return view('usuarios',$datos);
    }

    public function agregarUsuario(){
        $usuario = new UsuariosModel();
        $datos = [
            'usuario_id'=>$this->request->getPost('txt_usuario'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'email'=>$this->request->getPost('txt_email'),
            'password'=>$this->request->getPost('txt_password'),
            'tipo_usuario_id'=>$this->request->getPost('txt_tipo')
        ];
            $usuario->insert($datos);
            return $this->mostraru();
    }

}