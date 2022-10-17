<?php
    require_once("c://xampp/htdocs/Proyecto/controller/userController.php");
    $obj = new userController();
    $obj->guardar($_POST['id_departamento'],
                  $_POST['id_puesto'],
                  $_POST['id_bufete'], 
                  $_POST['Nombre'],
                  $_POST['Apellidos'],
                  $_POST['Telefono'],
                  $_POST['Email'],
                  $_POST['Direccion']
                );
?>