<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/head.php");
?>

<body style="background-color:#8C8C8C;">

    <h2 style="color:white" Class="text-center">INGRESAR NUEVO ABOGADO</h2>
    <form action="store.php" method="POST" autocomplete="off" style="background-color:#8C8C8C;">
        <div class="mb-3">
        <strong><label style="color:white"  for="exampleInputEmail1" class="form-label" >CODIGO PUESTO</label></strong>
            <input type="text" name="id_departamento" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

                <strong> <label style="color:white" for="exampleInputEmail1" class="form-label">CODIGO DEPARTAMENTO</label></strong>
            <input type="text" name="id_puesto" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

                <strong> <label style="color:white" for="exampleInputEmail1" class="form-label">CODIGO BUFETE</label></strong>
            <input type="text" name="id_bufete" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

                <strong> <label style="color:white" for="exampleInputEmail1" class="form-label">NOMBRE </label></strong>
            <input type="text" name="Nombre" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

                <strong> <label style="color:white" for="exampleInputEmail1" class="form-label">APELLIDOS</label></strong>
            <input type="text" name="Apellidos" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

                <strong> <label style="color:white" for="exampleInputEmail1" class="form-label">TELEFONO</label></strong>
            <input type="text" name="Telefono" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

                <strong> <label style="color:white" for="exampleInputEmail1" class="form-label">EMAIL</label></strong>
            <input type="text" name="Email" required class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

                <strong> <label style="color:white" for="exampleInputEmail1" class="form-label">DIRECCION</label></strong>
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