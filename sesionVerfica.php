<?php
    //inicia la sesión
    session_start();
    //comprobando si la variable libro tiene valor en la sesion
    if (isset($_SESSION['libro'])) {
        $sunLibro = $_SESSION['libro'];
        echo 'La llena y contiene > '.$sunLibro;
    } else {
        echo 'La sesión se encuentra vacía';
        $_SESSION['libro'] = 'Tradiciones...';
    }
?>
    