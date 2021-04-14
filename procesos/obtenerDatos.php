<?php

    require_once "../crud/crud.php";

    

   
	$obj = new crud();

	echo json_encode($obj->obtenerDatos($_POST['id']));



?>