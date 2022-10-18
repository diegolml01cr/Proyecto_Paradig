<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/head.php");
?>
<!DOCTYPE html>
<head>
    <Title>Buscar empleado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

<div class="container">
    <h2>Busqueda de registros</h2>
    <form role="form" method="POST">
        <div class="form-group">
            <label for="email">Identificación:</label>
            <input type="text" class="form-control" name="buscar" placeholder="IDENTIFICACIÓN" required>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Buscar</button>
    </form>

    <?php 
        if($_POST){
            require_once("c://xampp/htdocs/Proyecto/config/db.php");
            $con = new db();
            $PDO = $con->conexion();
            $id = $_POST['buscar'];
            $SQL = 'SELECT * FROM Personal where ID_Personal = :id';
            $stmt = $PDO->prepare($SQL);
            $result = $stmt->execute(array(':id'=>$id));
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

            if(count($rows)){
                foreach($rows AS $row){

                ?>
                <table class = "table table-sm">
                    <thead class = "table-dark">
                        <tr>
                
                            <th scope = "col">NOMBRE</th>
                            <th scope = "col">APELLIDOS</th>
                            <th scope = "col">TELEFONO</th>
                            <th scope = "col">EMAIL</th>
                            <th scope = "col">DIRECCION</th>
                            <th scope = "col"> </th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                        
                            <th><?= $row->Nombre ?></th>
                            <th><?= $row->Apellidos ?></th>
                            <th><?= $row->Telefono ?></th>
                            <th><?= $row->Email ?></th>
                            <th><?= $row->Direccion ?></th>
                            <th>
                                <a href="show.php?id=<?= $row->ID_Personal ?>" class="btn btn-primary"><i class="bi bi-three-dots-vertical">  VER</i></a>
                                <a href="edit.php?id=<?= $row->ID_Personal ?>" class="btn btn-success"><i class="bi bi-pencil-fill"> MODIFICAR</i></a>
                                <!-- Button trigger modal -->
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash-fill"> ELIMINAR</i></a>

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
                                                <a href="delete.php?id=<?= $row->ID_Personal?>" class="btn btn-danger">Eliminar</a>
                                                <!-- <button type="button" class="btn btn-danger">Eliminar</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>

                <?php
                }
            }else{
                echo "El empleado no existe en la base de dato";
            }
        }
    ?>
</div>

</body>
</html>

<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/footer.php");
?>