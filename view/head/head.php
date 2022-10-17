


<!doctype html>
<html lang="en">
  <head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        echo (empty($_GET['id'])) 
        ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo usuario" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id'] );
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
    <style>
        video{
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;

            position: fixed;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);

            z-index: -100;

            background-size: cover;
        }
        .capa{
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;

            position: fixed;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            background-color: rgba(0,0,0,0.5);
        }
    </style>



</head>

  <body>
  <video src="video/intro6.mp4" autoplay preload muted loop></video>
  
    <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">🏠Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Empleados
                </a>
                
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/view/user/Buscar.php">Buscar Abogados <i class="bi bi-search"></i></a></li>
                    <li><a class="dropdown-item" href="/view/user/index.php">Lista Abogados  <i class="bi bi-person-lines-fill"></i></a></li>
                    <li><a class="dropdown-item" href="/view/user/create.php">Agregar nuevos Abogados   <i class="bi bi-person-plus-fill"></i></a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </div>
<div class="container-fluid">