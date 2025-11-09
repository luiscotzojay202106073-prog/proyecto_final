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
$routes->get('eliminar_estudiante/(:num)','EstudiantesController::eliminarEstudiante/$1');
$routes->get('buscar_estudiante/(:num)','EstudiantesController::buscarEstudiante/$1');
$routes->post('modificar_estudiante','EstudiantesController::modificarEstudiante'); 

//Unidad1
$routes->get('unidades1','Unidades1Controller::index');
$routes->post('agregar_unidad1','Unidades1Controller::agregarUnidad1');

//Unidad2
$routes->get('unidades2','Unidades2Controller::index');

//Unidad3
$routes->get('unidades3','Unidades3Controller::index');
$routes->post('agregar_unidad3','Unidades3Controller::agregarUnidad3');
$routes->get('eliminar_unidad3/(:num)','Unidades3Controller::eliminarUnidad3/$1');
$routes->get('buscar_unidad3/(:num)','Unidades3Controller::buscarUnidad3/$1');
$routes->post('modificar_unidad3','Unidades3Controller::modificarUnidad3');

//Unidad4
$routes->get('unidades4','Unidades4Controller::index');

//tipos usuarios
$routes->get ('tiposusuarios','TiposusuariosController::index');

//usuarios
$routes->get ('usuarios','UsuariosController::mostraru');
$routes->post('iniciar_sesion','UsuariosController::index');
$routes->post('agregar_usuario','UsuariosController::agregarUsuario');
$routes->get('eliminar_usuario/(:num)','UsuariosController::eliminarUsuario/$1');
$routes->get('buscar_usuario/(:num)','UsuariosController::buscarusuario/$1');
$routes->post('modificar_usuario','UsuariosController::modificarUsuario'); 

//para acceder a los menus
$routes->get('menu_director','Home::verMenuDirector');
$routes->get('menu_docente','Home::verMenuDocente');

//cerrar sesion
$routes->get('cerrar_sesion','UsuariosController::cerrarSesion');