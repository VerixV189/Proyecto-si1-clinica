<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  .container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  form {
    display: flex;
    flex-direction: column;
  }

  .input-group {
    margin-bottom: 15px;
  }

  label {
    font-weight: bold;
  }

  input[type="text"],
  input[type="password"] {
    padding: 8px;
    border-radius: 3px;
    border: 1px solid #ccc;
  }

  button {
    padding: 10px;
    border: none;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
  }

  button:hover {
    background-color: #0056b3;
  }

  </style>
</head>
<body>
  <div class="container">
    <form action="{{ route('myspace.store') }}" method="post">
      @csrf
      <h2>Iniciar sesión</h2>
      <div class="input-group">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
      </div>
      <div class="input-group">
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="password" required>
      </div>
      <button type="submit">Iniciar sesión</button>
    </form>
  </div>
</body>
</html>
