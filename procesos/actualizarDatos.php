<?php

    require_once "../crud/crud.php";

    $datos = array(
            'nombre' => $_POST['nombreu'],
            'sueldo' => $_POST['sueldou'],
            'edad' => $_POST['fechau'],
            'fecha' => $_POST['fechau'],
            'id' => $_POST['id']
    );

    echo (new Crud) -> actualizarDatos($datos);



?>