<?php
/* A esta funcion debemos pasar todos los valores recolectados en el HTML */
function save_encuesta($nombre,$evento,$fecha,$lugar,$invitados,$p1,$p2,$p3,$p4,$p5){
	try {
         //Config de conexion MYSQL
        $conn = new PDO('mysql:host=localhost;dbname=encuestas','root','');
        
        /* Usamos prepared statements para insertar en modo seguro */
        $statement = $conn->prepare("INSERT INTO canteiro (nombre,evento,fecha,lugar,invitados,p1,p2,p3,p4,p5) VALUES('$nombre','$evento','$fecha','$lugar','$invitados','$p1','$p2','$p3','$p4','$p5')");
        
        /* Ejecutamos el Qry preparado */
		$statement->execute();
	
	} catch (PDOException $e) { //Manejamos los errores para ser impresos.
		echo "Error Try Mysql: ".$e->getMessage();
	}

}//Fin de la funcion , se guardan los datos en la tabla encuestas canteiro.
?>