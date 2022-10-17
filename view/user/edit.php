<?php
    require_once("C://xampp/htdocs/Proyecto/view/head/head.php");
    require_once("C://xampp/htdocs/Proyecto/controller/userController.php");
    $obj= new userController();
    $user = $obj->show($_GET['id']);
?>
<form action="update.php" method="post" autocomplete="off">
    <h2>MODIFICAR ABOGADO</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">IDENTIFICACION</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Codigo de Puesto</label>
        <div class="col-sm-10">
            <input type="text" name="id_departamento" class="form-control" id="inputPassword" value="<?=$user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Codigo de Departamento</label>
        <div class="col-sm-10">
            <input type="text" name="id_puesto" class="form-control" id="inputPassword" value="<?=$user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Codigo de Bufete</label>
        <div class="col-sm-10">
            <input type="text" name="id_bufete" class="form-control" id="inputPassword" value="<?=$user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="Nombre" class="form-control" id="inputPassword" value="<?=$user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevos Apellidos</label>
        <div class="col-sm-10">
            <input type="text" name="Apellidos" class="form-control" id="inputPassword" value="<?=$user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="Telefono" class="form-control" id="inputPassword" value="<?=$user[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Email</label>
        <div class="col-sm-10">
            <input type="text" name="Email" class="form-control" id="inputPassword" value="<?=$user[7]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Dirección</label>
        <div class="col-sm-10">
            <input type="text" name="Direccion" class="form-control" id="inputPassword" value="<?=$user[8]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?=$user[0]?>">Cancelar</a>
    </div>
</form>











<?php
    require_once("C://xampp/htdocs/Proyecto/view/head/footer.php");
?>