<?php

/* Si se ha hecho clic en el boton submit , tratamos de insertar los datos en la base MYSQL */
if ($_POST) {
	
    require ('modelos/modelos.php'); /* se llama al archivo Modelo que contiene las funciones pre-programadas */
    
    /* Cargamos todas las varibles del HTML por POST */
    $nombre = $_POST['fname'];
    $evento = $_POST['event'];
    $fecha = $_POST['date'];
    $lugar = $_POST['place'];
    $invitados = $_POST['guests'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];

    /* Guardamos el resultado de la funcion para validar el guardado en la BD */
	$validacion = save_encuesta($nombre,$evento,$fecha,$lugar,$invitados,$p1,$p2,$p3,$p4,$p5);
	header('Location:gracias.php');
			
}

require ('views/index.view.html');

?>