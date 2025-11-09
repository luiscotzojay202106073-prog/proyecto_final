<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4TO COMPUTACIÓN</title>
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
            <a class="navbar-brand" href="#">INED PANAMERICANO DOCENTES</a>

            <!-- Botón para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?=base_url('unidades1')?>">PRIMERA UNIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('unidades2')?>">SEGUNDA UNIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('unidades3')?>">TERCERA UNIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url('unidades4')?>">CUARTA UNIDAD</a>
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
    <!--agregar estudiantes-->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary btn-lg rounded-pill shadow px-4" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        <i class="bi bi-plus-circle"></i> AGREGAR NUEVO REGISTRO
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="bi bi-person-badge"></i> Registro de Notas</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?=base_url('agregar_unidad4');?>" method="post">
                                <div class="mb-2">
                                    <label for="txt_carne" class="form-label">Carné del alumno</label>
                                    <input type="number" class="form-control" name="txt_carne" id="txt_carne" required>
                                </div>

                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <label for="txt_curso1" class="form-label">Estadística</label>
                                        <input type="number" class="form-control" name="txt_curso1" id="txt_curso1"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txt_curso2" class="form-label">Matemáticas</label>
                                        <input type="number" class="form-control" name="txt_curso2" id="txt_curso2"
                                            required>
                                    </div>
                                </div>

                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <label for="txt_curso3" class="form-label">Laboratorio 1</label>
                                        <input type="number" class="form-control" name="txt_curso3" id="txt_curso3"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txt_curso4" class="form-label">Computación Aplicada</label>
                                        <input type="number" class="form-control" name="txt_curso4" id="txt_curso4"
                                            required>
                                    </div>
                                </div>

                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <label for="txt_curso5" class="form-label">Sistemas e Instalación de Software</label>
                                        <input type="number" class="form-control" name="txt_curso5" id="txt_curso5"
                                            required>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2 mt-3">
                                    <button type="submit" class="btn btn-outline-primary btn-lg rounded-pill shadow px-4"
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
    <br><br><br>
    <h1>NOTAS CUARTA UNIDAD</h1>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>Carné alumno</th>
                <th>Estadística</th>
                <th>Matemáticas</th>
                <th>Laboratorio 1</th>
                <th>Computación Aplicada</th>
                <th>Sistemas e Instalación</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y a cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $unidad4) {
                    
                
            ?>
            <tr>
                <td> <?=$unidad4['carne_alumno'];?> </td>
                <td> <?=$unidad4['curso_1'];?> </td>
                <td> <?=$unidad4['curso_2'];?> </td>
                <td> <?=$unidad4['curso_3'];?> </td>
                <td> <?=$unidad4['curso_4'];?> </td>
                <td> <?=$unidad4['curso_5'];?> </td>
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