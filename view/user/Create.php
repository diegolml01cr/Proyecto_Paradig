<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/head.php");
?>

<body>

    <h2 Class="text-center">INGRESAR NUEVO ABOGADO</h2>
    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Codigo de puesto</label>
            <input type="text" name="id_departamento" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Codigo de departamento</label>
            <input type="text" name="id_puesto" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">codigo de bufete</label>
            <input type="text" name="id_bufete" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Nombre del Abogado</label>
            <input type="text" name="Nombre" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">apellidos del Abogado</label>
            <input type="text" name="Apellidos" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">telefono del Abogado</label>
            <input type="text" name="Telefono" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">email del Abogado</label>
            <input type="text" name="Email" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">direccion del Abogado</label>
            <input type="text" name="Direccion" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">



        </div>

        <button type="submit" class="btn btn-primary" href="/../index.php">Guardar</button>
        <a class="btn btn-danger" href="/../index.php">Cancelar</a>
    </form>

</body>

<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/footer.php");
?>