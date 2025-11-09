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
$routes->get('eliminar_unidad1/(:num)','Unidades1Controller::eliminarUnidad1/$1');
$routes->get('buscar_unidad1/(:num)','Unidades1Controller::buscarUnidad1/$1');
$routes->post('modificar_unidad1','Unidades1Controller::modificarUnidad1');

//Unidad2
$routes->get('unidades2','Unidades2Controller::index');
$routes->post('agregar_unidad2','Unidades2Controller::agregarUnidad2');
$routes->get('eliminar_unidad2/(:num)','Unidades2Controller::eliminarUnidad2/$1');
$routes->get('buscar_unidad2/(:num)','Unidades2Controller::buscarUnidad2/$1');
$routes->post('modificar_unidad2','Unidades2Controller::modificarUnidad2');

//Unidad3
$routes->get('unidades3','Unidades3Controller::index');
$routes->post('agregar_unidad3','Unidades3Controller::agregarUnidad3');
$routes->get('eliminar_unidad3/(:num)','Unidades3Controller::eliminarUnidad3/$1');
$routes->get('buscar_unidad3/(:num)','Unidades3Controller::buscarUnidad3/$1');
$routes->post('modificar_unidad3','Unidades3Controller::modificarUnidad3');

//Unidad4
$routes->get('unidades4','Unidades4Controller::index');
$routes->post('agregar_unidad4','Unidades4Controller::agregarUnidad4');
$routes->get('eliminar_unidad4/(:num)','Unidades4Controller::eliminarUnidad4/$1');
$routes->get('buscar_unidad4/(:num)','Unidades4Controller::buscarUnidad4/$1');
$routes->post('modificar_unidad4','Unidades4Controller::modificarUnidad4');

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