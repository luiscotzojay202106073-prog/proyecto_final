<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODIFICAR UNIDAD 1</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    body {
        background: linear-gradient(135deg, #e8f0fe, #e3f7ed);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Segoe UI', sans-serif;
    }

    .card {
        width: 55%;
        min-width: 360px;
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background: linear-gradient(90deg, #007bff, #00bcd4);
        color: #fff;
        text-align: center;
        padding: 0.8rem;
    }

    .card-body {
        padding: 1.2rem 1.5rem;
    }

    .form-label {
        margin-bottom: 0.25rem;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .form-control {
        padding: 0.35rem 0.75rem;
        font-size: 0.9rem;
    }

    .row.g-2 {
        --bs-gutter-x: 0.75rem;
        --bs-gutter-y: 0.5rem;
    }

    .btn {
        padding: 0.4rem 1.2rem;
        font-size: 0.9rem;
        border-radius: 0.5rem;
    }

    .btn-primary {
        background: linear-gradient(90deg, #007bff, #00bcd4);
        border: none;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #0069d9, #00a6bb);
    }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="bi bi-person-badge"></i>Modificar Datos de la unidad 1</h5>
        </div>
        <div class="card-body">
            <form action="<?=base_url('modificar_unidad1');?>" method="post">
                <div class="mb-2">
                    <label for="txt_carne" class="form-label">Carné del alumno</label>
                    <input type="number" class="form-control" name="txt_carne" id="txt_carne" required value="<?=$datos['carne_alumno'];?>" readonly>
                </div>

                <div class="row g-2">
                    <div class="col-md-6">
                        <label for="txt_curso1" class="form-label">Estadística</label>
                        <input type="number" class="form-control" name="txt_curso1" id="txt_curso1" required value="<?php echo $datos['curso_1'];?>">
                    </div>
                    <div class="col-md-6">
                        <label for="txt_curso2" class="form-label">Matemáticas</label>
                        <input type="number" class="form-control" name="txt_curso2" id="txt_curso2" required value="<?= $datos['curso_2'];?>">
                    </div>
                </div>

                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <label for="txt_curso3" class="form-label">Laboratorio 1</label>
                        <input type="number" class="form-control" name="txt_curso3" id="txt_curso3" required value="<?=$datos['curso_3'];?>">
                    </div>
                    <div class="col-md-6">
                        <label for="txt_curso4" class="form-label">Computación Aplicada</label>
                        <input type="number" class="form-control" name="txt_curso4" id="txt_curso4" required value="<?=$datos['curso_4'];?>">
                    </div>
                </div>

                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <label for="txt_curso5" class="form-label">Sistemas e Instalación</label>
                        <input type="number" class="form-control" name="txt_curso5" id="txt_curso5" required value="<?=$datos['curso_5'];?>">
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <<button type="submit" class="btn btn-outline-primary bg-gradient text-primary shadow px-4">
                        <i class="bi bi-pencil-square fs-4"></i>Modificar Datos
                        </a>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>