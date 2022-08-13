<?php

session_start();

$mensaje = "";

if (isset($_POST["iniciar"])) 
{
    $usuario - $_POST["usuario"];
    $clave = $_POST["clave"];
     $usuario = strtoupper($usuarto);
    
    if ($usuario == "ADMIN" && $clave == "12345") {
        //Vartantes de sasiny
    
    $_SESSION["user"] = "admin";
    
    $_SESSION["autorizano"] = true;
    
    header("location: principal.php"); // Redirectonák a otra bilgills:
    
    } else {
    
    $mensaje ="Usuario y/o Contraseña Icontrecta";
    }
}

?>
<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>LOGIN </title>

</head>

<body>

<h2>LOGIN</h>

<form method="POST" action="index.php">

<label for="">Usuario: </label> 
<input type="text" name="usuario" placeholder="Usuarto"><br><br>

<label for="">Clave: </label>

<input type="password" name="clave" placeholder="Password"><br><br>
 <select name="cpousario" id="">

<option value>Administador</option>
 <option value="">Invitado</option>

</select>

<button type="submit" name="car">INICIAR SESIÓN</button>

</form>

<?php echo $mensaje; ?> 
    </body>
</html>