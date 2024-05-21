<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinica Dental</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: #007bff;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar li {
  margin-right: 20px;
}

.navbar a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s ease;
}

.navbar a:hover {
  color: #0056b3;
}

.btn-login {
  background-color: #28a745;
  color: #fff;
  padding: 8px 15px;
  border: none;
  border-radius: 3px;
  text-decoration: none;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn-login:hover {
  background-color: #218838;
}

  </style>
</head>
<body>
  <nav class="navbar">
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#odontologia-general">Odontología General</a></li>
      <li><a href="#odontologia-estetica">Odontología Estética</a></li>
      <li><a href="#odontopediatria">Odontopediatría</a></li>
      <li><a href="#servicios">Servicios</a></li>
    </ul>
    <a href="login" class="btn-login">Iniciar Sesión</a>
  </nav>
  <div class="content">
    <!-- Contenido de la página -->
  </div>
</body>
</html>

