<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #1c003d, #8136aa);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-card {
      background-color: #fff;
      border-radius: 1rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
      padding: 2rem;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }
    .login-card h3 {
      margin-bottom: 1.5rem;
      color: #333;
      font-weight: 600;
    }
    .form-control {
      border-radius: 0.75rem;
      padding: 0.75rem;
    }
    .btn-primary {
      border-radius: 0.75rem;
      padding: 0.75rem;
      background: linear-gradient(135deg, #610691, #ad74e2);
      border: none;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h3>Iniciar Sesión</h3>
    <br>
    <form action="<?=base_url('iniciar_sesion')?>" method="post">
      <div class="mb-3 text-start">
        <label for="txt_usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="txt_usuario" id="txt_usuario" placeholder="Ingrese su usuario" required>
      </div>
      <div class="mb-3 text-start">
        <label for="txt_contra" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="txt_contra" id="txt_contra" placeholder="Ingrese su contraseña" required>
      </div>
      <br><br>
      <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>