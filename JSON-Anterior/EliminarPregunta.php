<?php 
    ob_start(); 
    include_once('Capas/BLL.php');
    include_once('Capas/Entity.php');
    $Pregunta = new Pregunta($_POST['CodPregunta'],NULL,NULL,NULL,NULL,NULL);
    echo EliminarPregunta($Pregunta);
?>