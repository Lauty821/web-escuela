<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Urquiza 49</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="home-admin.php">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="home.php">Bolsa de trabajo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="estadisticas.php">Ver estadísticas</a>
            </li>

            <li class="nav-item active">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-primary">Usuarios</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Crear usuario</a>
                            <a class="dropdown-item" href="#">Cambiar usuario</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item active">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-primary">Secciones</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Regente</a>
                            <a class="dropdown-item" href="#">Profesores</a>
                            <a class="dropdown-item" href="#">Bedelia</a>
                            <a class="dropdown-item" href="#">Secretaria</a>
                            <a class="dropdown-item" href="alumno.php">Alumnos</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item active">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-primary">Publicación</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="./view/listadoNoticias.php">Listado de publicación</a>
                            <a class="dropdown-item" href="./view/createPublicacion.php">Crear una publicación</a>
                           
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cerrar.php">Cerrar sesión</a>
            </li>
            
        </ul>
    </nav>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>