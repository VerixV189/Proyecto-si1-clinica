<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link  rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
  <div class="container">
    
    <form action="{{ route('myspace.store') }}" method="post">
    <img src="{{'img/logo.jpeg'}}" alt="img-login" class="imagen-formulario">
      @csrf
      <h2>Iniciar sesión</h2>
      <br>

      <div class="input-group">
        <input type="text" name="usuario" id="usuario" class="input" placeholder="Usuario" required>
        <i class="fa-solid fa-user"></i>
      </div>
      <div class="input-group">
          <input type="password" name="usuario" id="usuario" class="input" placeholder="Contraseña" required>
          <i class="fa-solid fa-lock"></i>
      </div>
      <button type="submit">Iniciar sesión</button>
      <p class="footer">¿No tienes cuenta? Por favor, <a href="#" class="link">Registrate</a></p>
    </form>
  </div>
</body>
</html>
