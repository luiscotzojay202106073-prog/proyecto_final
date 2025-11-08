<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODIFICAR USUARIOS</title>
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
            <h5 class="mb-0"><i class="bi bi-person-badge"></i>Modificar Datos del Usuario</h5>
        </div>
        <div class="card-body">
            <form action="<?=base_url('modificar_usuario');?>" method="post">
                <div class="mb-2">
                    <label for="txt_usuario" class="form-label">Id del Usuario</label>
                    <input type="number" class="form-control" name="txt_usuario" id="txt_usuario" required value="<?=$datos['usuario_id'];?>" readonly>
                </div>

                <div class="row g-2">
                    <div class="col-md-6">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" required value="<?php echo $datos['nombre'];?>">
                    </div>
                    <div class="col-md-6">
                        <label for="txt_email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="txt_email" id="txt_email" required value="<?=$datos['email'];?>">
                    </div>
                </div>
                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <label for="txt_password" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" name="txt_password" id="txt_password" required value="<?=$datos['password'];?>">
                    </div>
                    <div class="col-md-6">
                        <label for="txt_tipo" class="form-label">Id Tipo de Usuario</label>
                        <input type="number" class="form-control" name="txt_tipo" id="txt_tipo" required value="<?=$datos['tipo_usuario_id'];?>" readonly>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow px-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-pencil-fill"></i> Modificar Datos
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>