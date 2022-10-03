<?php

include_once('config/config.php');

?>


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8"/>
<tittle>  </tittle>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body> 
   <nav class="navbar navbar-expand navbar-dark bg-dark mb-5" >
      <ul class='navbar-nav'>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT ?>/clientes/index.php"> Ver clientes</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>/clientes/add.php">Registrar sesión</a>
         </li>
      </ul>
   </nav>
<div class="container" >
  <!--  < ?php include_once('menu.php')?> este código de menú va acá, pero no me funciona porque me salen dos menús  -->
   <h1 class="text-center" > Clientes </h1>
  
</div>
</body>
</html>