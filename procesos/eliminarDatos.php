<?php

    require_once "../crud/crud.php";

    

   
	$obj = new crud();

	echo $obj->eliminarDatos($_POST['id']);



?>