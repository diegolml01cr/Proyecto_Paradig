<?php
require_once("C://xampp/htdocs/Proyecto/controller/userController.php");
$obj = new userController();
$obj->DELETE($_GET['id']);
?>
