<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php
        //si existe o no la variable de sesion activa (la cual se crea al iniciar sesion)
        if (!session()->get('activa')) {
            echo "no tiene acceso";
        }else {

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">INED PANAMERICANO DIRECTOR</a>

            <!-- Botón para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?=base_url('grados')?>">GRADOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('estudiantes')?>">ESTUDIANTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('tiposusuarios')?>">TIPOS DE USUARIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url('usuarios')?>">USUARIOS ACTIVOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('cerrar_sesion')?>">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body text-center p-5">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Usuario"
                    class="rounded-circle mb-3" width="100">

                <!-- Nombre de usuario (dinámico) -->
                <h3 class="card-title mb-2"><?=session()->get('nombre')?></h3>
            </div>
        </div>
    </div>
            <br><br>

    <!--agregar registros-->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary btn-lg rounded-pill shadow px-4" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        <i class="bi bi-plus-circle"></i> NUEVO REGISTRO
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="bi bi-person-badge"></i> Registro de Usuarios</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?=base_url('agregar_usuario');?>" method="post">
                                

                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <label for="txt_nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="txt_nombre" id="txt_nombre"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txt_email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" name="txt_email" id="txt_email"
                                            required>
                                    </div>
                                </div>

                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <label for="txt_password" class="form-label">Contraseña</label>
                                        <input type="text" class="form-control" name="txt_password" id="txt_password"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txt_tipo" class="form-label">Id de tipo de usuario</label>
                                        <input type="number" class="form-control" name="txt_tipo" id="txt_tipo"
                                            required>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2 mt-3">
                                    <button type="submit"
                                        class="btn btn-outline-primary btn-lg rounded-pill shadow px-4"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-plus-square"></i> Agregar Datos
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <br><br>
    <h1>Usuarios</h1>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>Id Usuario</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Password</th>
                <th>Id Tipo de Usuario</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y a cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $usuario) {
                    
                
            ?>
            <tr>
                <td> <?=$usuario['usuario_id'];?> </td>
                <td> <?=$usuario['nombre'];?> </td>
                <td> <?=$usuario['email'];?> </td>
                <td> <?=$usuario['password'];?> </td>
                <td> <?=$usuario['tipo_usuario_id'];?> </td>
            </tr>
            <?php
                } //fin del ciclo
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <?php
      } //fin de else que verifica si la sesion está activa
    ?>
</body>

</html>