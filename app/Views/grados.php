<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
            <a class="navbar-brand" href="index.html">INED PANAMERICANO DIRECTOR</a>

            <!-- Botón para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url('grados')?>">GRADOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('estudiantes')?>">ESTUDIANTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('tiposusuarios')?>">TIPOS DE USUARIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('usuarios')?>">USUARIOS ACTIVOS</a>
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


    <br><br><br>
    <h1>Grados</h1>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y a cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $grado) {
                    
                
            ?>
            <tr>
                <td> <?=$grado['codigo_grado'];?> </td>
                <td> <?=$grado['nombre'];?> </td>
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