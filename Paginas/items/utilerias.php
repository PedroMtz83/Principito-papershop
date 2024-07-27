<?php

    function direccionar($mensaje, $dir){
        include('items/encabezado.php');
        echo'<div class="formulario-div" style="color: brown">';
        echo '<h1 style="text-aling:center">'. $mensaje . '</h1>';
        echo '<h4 style="text-aling:center"> Redireccionando </h4>';
        echo '</div>';
        include('items/pie.php');
        header('refresh:3,url=' . $dir);
    }    
?>