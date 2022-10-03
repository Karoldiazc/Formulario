<?php
include_once('../config/config.php');
include_once('cliente.php');

if (isset($_POST) && !empty($_POST)){
    $p = new cliente();


$save = $p->save($_POST);
if ($save){
    $mensaje = '<div class="alert alert-success" >Sesión registrada</div>';
}else{
    $mensaje = '<div class="alert alert-danger" > Error al registrar! </div>';
}
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <tittle>  </tittle>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body> 
    <?php include('../menu.php')?>
    <div class="container">
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
<h2 class="text-center mb-2"> Creación de cliente </h2>
<form method="POST" enctype="multipart/form-data">
    <div class="row mb-2">
     <div class="col">
      <input type="text" name="nombres" id="nombres" placeholder="Nombres o razón social" require class="form-control"/>
    </div>
    <div class="col">
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" require class="form-control"/>
    </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="email" name="email" id="email" placeholder="Correo electrónico" require class="form-control"/>
    </div>
    </div>
    
    <div class="row mb-2">
        <div class="col">
            <input type="number" name="celular" id="celular" placeholder="Número de celular" require class="form-control"/>
    </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <textarea id="utiles" name="utiles" placeholder="Cuentanos tu solicitud o inquietud"
            class="form-control"></textarea>
        </div>
    </div>
    <button class="btn btn-outline-success">Registrar</button>
</form>
</div>
</body>
</html>
