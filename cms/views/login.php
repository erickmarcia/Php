<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="main.js"></script>
</head>
<body>
    
<div class = "container-fluid register-login">
    <div class="row wrapper">
        <div class="container_image">
        <div class="image__points">
        </div>
        </div>
    </div>
</div>

<!-- Start Contenedor -->
<div class="col-lg form-center d-flex justify-content-center align-items-center">
<div class="container-form">
<h1 class="register-login-h1">Acceso
</h1>
<p class="register-login-p">¡Bienvenido, por favor ingresa tus credenciales.</p>
<!-- Inicio Formulario -->
<form>
<div class="forms-group ">
<input type="text" name="username" id="username" class ="form-control" require>
<label for="username" class="form-label">Usuarios</label>
</div>
<div class="forms-group margin-bottom">
<input type="password" name="password" id="password" class ="form-control" require>
<label for="password" class="form-label">Password</label>
</div>

<div class="d-flex justify-content-between">
<div class="d-flex align-items-center">
<input class ="form-check-input checked--form--input" type="checkbox" name="" id="remember" value="">
<label for="remember" class="form-check-label order-2">Recuérdame</label>
<label for="remember" class="label--checked order-1"></label>
</div>
<a href="#" class="forgot_password--link">Olvidó su contraseña?</a>
</div>
</form>
<!-- Fin Fomulario -->
</div>
</div>

</body>
</html>