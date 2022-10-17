<!doctype html>
<html lang="es">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/head.php");
?>

<center>
    <br><br>
    <h1 style="color:#2F4F4F">BUFETE DE ABOGADO</h1>
</center>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" class="container-fluid bg-dark p-2 mb-3">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/transparente.png" class="d-block w-30" height="400px" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4 style="color:#2F4F4F;">PROYECTO</h4>
                <p style="color:#2F4F4F;"> Paradigmas</p>
                <a href="/view/user/create.php"  class="btn btn-primary"
                    <i class="bi bi-person-plus-fill"></i> AGREGAR NUEVO ABOGADO</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/transparente.png" class="d-block w-30" height="400px" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4 style="color:#2F4F4F;">PROYECTO</h4>
                <p style="color:#2F4F4F;"> Paradigmas</p>
                <a href="/view/user/index.php" class="btn btn-primary">
                    <i class="bi bi-person-lines-fill"></i> LISTA DE ABOGADOS</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/transparente.png" class="d-block w-30" height="400px" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4 style="color:#2F4F4F;">PROYECTO</h4>
                <p style="color:#2F4F4F;"> Paradigmas</p>
                <a href="/view/user/Buscar.php" class="btn btn-primary">
                    <i class="bi bi-search"></i> BUSCAR ABOGADO</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
</div class="container-fluid">
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>



<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/footer.php");
?>
</div>


</html>