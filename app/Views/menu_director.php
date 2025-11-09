<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario Director</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
    .logo-img {
        max-width: 400px;
        height: auto;
        margin: 0 15px;
    }

    .credit-section {
        margin-top: 50px;
    }
    </style>
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
                        <a class="nav-link" href="<?=base_url('usuarios')?>">USUARIOS ACTIVOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url('cerrar_sesion')?>">Cerrar Sesión</a>
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
    <div class="row">
        <!-- Misión -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title text-primary">Misión</h4>
                    <p class="card-text">
                        Brindar una educación integral, inclusiva y de calidad que promueva el desarrollo académico,
                        social y humano de los estudiantes, fomentando valores cívicos, éticos y culturales. Nuestro
                        compromiso es formar ciudadanos competentes, críticos y responsables que contribuyan activamente
                        al progreso de su comunidad y del país.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title text-success">Visión</h4>
                    <p class="card-text">
                        Ser un centro educativo público referente en excelencia académica y formación en valores,
                        reconocido por su compromiso con la equidad, la innovación pedagógica y la participación
                        comunitaria, impulsando una educación que transforme vidas y fortalezca el desarrollo sostenible
                        de Guatemala.
                    </p>
                </div>
            </div>
        </div>
        <!-- Sección de logos -->
        <header class="bg-primary text-white text-center py-5 shadow-sm">
            <h1 class="fw-bold">Universidad de San Carlos de Guatemala -USAC-</h1>
            <h2 class="lead">Escuela de Formación de Profesores de Enseñanza Media -EFPEM-</h2>
        </header>
        <br>

        <!-- Sección de nombre del creador y título -->
        <section class="text-center mb-5">
            <br>
            <h2 class="text-secondary fw-bold mb-3">Creadores</h2>
            <p class="fs-5"><u>Luis Antonio Cotzojay Culajay 202106073</u> <br> "Diseño, estructura y configuración completa de la página, visualización de todas las bases de datos, login, CRUD estudiantes y usuarios"</p>
            <br>
            <p class="fs-5"><u>Gabriela Magaly de León Secay 202106372</u> <br> "Funciones de agregar, eliminar y modificar notas de la primera y segunda unidad" </p>
            <br>
            <p class="fs-5"><u>Miriam Elizabeth Mejía Ajanel 202105950</u> <br> "Funciones de agregar, eliminar y modificar notas de la tercera y cuarta unidad"</p>

            <h2 class="text-secondary fw-bold mt-4 mb-3">Proyecto Final</h2>
            <p class="fs-5">Proyectos de Programación 2025</p>
        </section>

        <!-- Pie de página -->
        <footer class="bg-dark text-white text-center py-3">
            <small>&copy; 2025 | @ProyectosProgra</small>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>

        <?php
      } //fin de else que verifica si la sesion está activa
    ?>
</body>

</html>