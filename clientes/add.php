<?php
include_once('../config/config.php');
include_once('cliente.php');

if (isset($_POST) && !empty($_POST)){
    $p = new clientes();


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
      <!-- Bootstrap Css -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
</head>

<body style="width:100% !important;">
  
<nav class="navbar navbar-expand-lg navbar-light bg-dark bg-gradient inicio">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php"> <img src="../imagenes/ARCOIRIS.png" class="img-fluid" width="100px"
        height="100px" alt=""></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.html"> Nosotros </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="usuario.html"> Usuario 👤 </a>
          </li>  REVISAR SI DEBO BORRARLO PORQUE DEBO UNIRLO AL ADMI, PARA INICIAR SESIÓN-->
          <li class="nav-item">
            <a class="nav-link" href="../index.html"> Favorito 🤎 </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../catalogo.html" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Catálogo 📖
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#escuela">Escuela</a></li>
              <li><a class="dropdown-item" href="#oficina">Oficina</a></li>
              <li><a class="dropdown-item" href="#">Kit profesional</a></li>
              <li><a class="dropdown-item" href="#arte">Arte</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Todo de Arcoiris </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Contáctanos</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control ml-2 btn btn-light" type="search" placeholder="¿Qué necesitas hoy?"
            aria-label="Search">
          <button class="btn btn-outline-success btn btn-outline-dark" type="submit">BUSCAR</button>
        </form>
      </div>
    </div>
  </nav>
    <div class="container">
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
<h2 class="text-center mb-2"> Dejanos tus datos, te contactaremos </h2>
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
    </div>
    

      <!-- FOOTER PROFE -->
  <br>
  <br>
      <div class="row footer">
        <div class="col-6">
          <h6 class="text-center linea" id="ubicacion"> <h1>SOBRE NOSOTROS</h1> </h6>
          <p class="text-center">Atención unicamente virtual</p>
          <p class="text-center">3213240255 - 5482655 </p>
          <p class="text-center"> <strong>Lun-Sab 8am-6pm</strong>  </p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3445390192646!2d-74.2274485852956!3d4.7100781428878085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f78020ab43d09%3A0xc375723c1a9367b5!2sParque%20Cultural%20de%20Mosquera!5e0!3m2!1ses!2sco!4v1663443928306!5m2!1ses!2sco"
            width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          <br>
        </div>

        <div class="col-6">
          <h4 class="text-center linea" id="contactanos"> <h1>SIGUENOS</h1></h4>
          <br>
          <a href="https://web.whatsapp.com/" target="_blank"> <img aling="center" src="../imagenes/whatsapp.webp" alt="" width="80" height="40"> WhatsApp</a> 
          <a href="https://www.instagram.com/" target="_blank">  <img src="../imagenes/instagram.png" alt="" width="70" height="40">Instagram</a> 
          <a href="https://es-la.facebook.com/" target="_blank"><img src="../imagenes/facebook.png" alt="" width="70" height="40"> Facebook </a> 
          <br>
          <br>
          <br>
            <img src="../imagenes/ARCOIRIS.png" alt="Logo de Arcoiris" width="150" height="100">  
        </div>
        
        <br>
        <small class="text-center">&copy;2022 • <b>Arcoiris</b> -Todos los Derechos reservados. </small>
        <br>
      </div>
    </div>
  </div>
  


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper, js then Bootstrap JS -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="http"></script>


</body>

</html>