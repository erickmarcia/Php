
<?php
require_once 'controllers/UserController.php';
$user = new UserController();
$user->registry();

session_start();
if(empty($_SESSION['key'])){
    $_SESSION['key'] = bin2hex(random_bytes(32));
     #bin2hex = Devuelve una cadena ascii que contiene la representación hexadecimal de un string que va en su parámetro
    #random_bytes(32) = Genera bytes aleatorios seguros. es el tamaño de la cadena
}
// echo $_SESSION['key'];
#Crear CSRF token
#creamos un toquen CSRF, para validar si son iguales o no 
$csrf = hash_hmac('sha256','registro.php',$_SESSION['key']);

#session_start();
#$_SESSION['DATO'] = 'valor';
#$_SESSION['rol'] = 'admin';
#session_destroy();

// PARA OBTENER 
// $_GET['variable'];/*SE VE LA INFORMACION QUE SE ENVIA*/
// $_POST['VARIABLE'];/*NO SE VE LA INFORMACION QUE SE ENVIA*/

if(isset($_POST['registrar']))
{
    if(hash_equals($csrf,$_POST['csrf']))
    {
    // echo "registrar";
    $data =  array(
        'name' =>$_POST['nombre'],
        'username' =>$_POST['username'],
        'email'=>$_POST['email'],
        'password' =>md5($_POST['password']),
    );
    $user->saveUser($data);
    }
    else {
    header("Location: error.php");
    die();
    }
}

?>

<body>
    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image">
                    <div class="image--points"></div>
                </div>
            </div>
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <h1 class="register-login-h1">Registro</h1>
                    <p class="register-login-p">Por favor ingrese sus datos para crear su cuenta</p>
                    <?php
                        if (isset($_SESSION['message'])) {
                            echo "<div class='alert alert-primary' role='alert'>".$_SESSION['message']."</div>";
                        }
                    ?>
             
                    <!-- Action la página a la cuál irá la información del formulario -->
                    <!-- Method indica cómo enviaremos la información por el método HTTP -->
                    <!-- enctype multipart/form-data permite agregar archivos -->
                    <!-- Inicia Formulario -->
                    <!-- para enviarinfo desde el form <form action="#" method = "POST" name ="registroForm" id="registryForm" > para  -->
                    <form action="registro.php" method="POST" name="registroForm" id="registroForm">
                        <input type="hidden" name="csrf" id="csrf" value="<?php echo $csrf ?>">
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                    <label for="nombre" class="form-label">Nombre</label>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="username" name="username" class="form-control" required>
                                    <label for="username" class="form-label">Username</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" required>
                                <label for="email" class="form-label">E-mail</label>
                            </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <div class="form-group margin--bottom">
                                <input type="password" id="confirmarpass" name="confirmarpass" class="form-control" required>
                                <label for="confirmpassword" class="form-label">Confirmar contraseña</label>
                            </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                <input class="form-check-input checked--form--input" type="checkbox" id="acepto" name="acepto" value="" required>
                                <label class="form-check-label order-2" for="remember">Acepto los términos y condiciones</label>
                                <label class="label--ckecked order-1" for="acepto"></label>
                            </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-lg-center">
                            <button type="submit" name="registrar" class="btn btn-signup--register align-self-center">Aceptar</button>
                        </div>
                        <a href="#" class="register-link--haveaccount">¿Ya tiene una contraseña? Entrar</a>
                    </form>
                    <!-- Fin Formulario -->
                </div>
            </div>
            <!-- Fin Contenedor -->
        </div>
    </div>
