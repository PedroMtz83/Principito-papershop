<?php
    include('items/utilerias.php');

    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    if($usuario=='admin' && $password=='123'){ 
       direccionar('Bienvenido Adiministrador', 'agregar.php');
       $_SESSION['usuario']='administrador';

    }else{
        direccionar('Datos incorrectos', 'sesionIni.php');
    }
?>