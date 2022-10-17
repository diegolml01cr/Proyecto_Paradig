<?php
    require_once("C://xampp/htdocs/Proyecto/view/head/head.php");
    require_once("C://xampp/htdocs/Proyecto/controller/userController.php");
    $obj = new userController();
    $date = $obj->show($_GET['id']);
?>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></head>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary"><i class="bi bi-arrow-bar-right">REGRESAR</i></a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
                    <!-- <button type="button" class="btn btn-danger">Eliminar</button> -->
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table">
    <thead class = "table-dark">
        <tr>
            <th scope="col">IDENTIFICACION</th>
            <th scope="col">Puesto</th>
            <th scope="col">Departamento</th>
            <th scope="col">Bufete</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Dirección</th>
        </tr>
    </thead>
    <tbody class = "table-group-divider">
        <tr>
            <td scope="col"><?= $date[0]?></td>
            <td scope="col"><?= $date[1]?></td>
            <td scope="col"><?= $date[2]?></td>
            <td scope="col"><?= $date[3]?></td>
            <td scope="col"><?= $date[4]?></td>
            <td scope="col"><?= $date[5]?></td>
            <td scope="col"><?= $date[6]?></td>
            <td scope="col"><?= $date[7]?></td>
            <td scope="col"><?= $date[8]?></td>
        </tr>
    </tbody>
</table>


<?php
    require_once("C://xampp/htdocs/Proyecto/view/head/footer.php");
?>