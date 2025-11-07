<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//grados
$routes->get('grados','GradosController::index');

//estudiantes
$routes->get('estudiantes','EstudiantesController::index');
$routes->post('agregar_estudiante','EstudiantesController::agregarEstudiante');

//Unidad1
$routes->get('unidades1','Unidades1Controller::index');

//Unidad2
$routes->get('unidades2','Unidades2Controller::index');

//Unidad3
$routes->get('unidades3','Unidades3Controller::index');

//Unidad4
$routes->get('unidades4','Unidades4Controller::index');

//tipos usuarios
$routes->get ('tiposusuarios','TiposusuariosController::index');

//usuarios
$routes->get ('usuarios','UsuariosController::mostraru');
$routes->post('iniciar_sesion','UsuariosController::index');

//para acceder a los menus
$routes->get('menu_director','Home::verMenuDirector');
$routes->get('menu_docente','Home::verMenuDocente');

//cerrar sesion
$routes->get('cerrar_sesion','UsuariosController::cerrarSesion');