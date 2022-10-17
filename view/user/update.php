<?php
    require_once("C://xampp/htdocs/Proyecto/controller/userController.php");
    $obj = new userController();
    $obj->update($_POST['id'],
                 $_POST['id_departamento'],
                 $_POST['id_puesto'],
                 $_POST['id_bufete'], 
                 $_POST['Nombre'],
                 $_POST['Apellidos'],
                 $_POST['Telefono'],
                 $_POST['Email'],
                 $_POST['Direccion']
                );
?>
