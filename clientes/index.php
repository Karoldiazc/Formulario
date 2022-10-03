<?php
include_once('../config/config.php');
include('cliente.php');

$p = new clientes();
$data = $p->getAll();
if ( isset ($_GET['id']) && !empty($_GET['id']) ){
    $remove = $p->delete($_GET['id']);
    if ($remove){
        header ('Location: '.ROOT.'cliente/index.php');
 }else{
        $mensaje ='<div class="alert alert-danger" role="alert"> Error al eliminar </div>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <tittle> Lsita de clientes </title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<?php include_once('../menu.php')?>
    <div class="container">
        <h2 class="text-center mb-2">Lista de clientes </h2>
        <div class="row">
            <?php
            while ($pt =mysqli_fetch_object ($data)){
                $nombres= $pt->nombres;
                echo "<div class='col'>";   
                echo "<div class='border border-info p-2'>";
                echo "<h5>  $pt->nombres $pt->apellidos </h5>";
                echo "<div class='text-center'>";
                echo "<a class='btn btn-success ' href='".ROOT."/client/edit.php?id=$pt->id'> Modificar </a> - <a 
                class='btn btn-danger ' 
                href='".ROOT."/client/index.php?id=$pt->id' > Eliminar </a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

                
    
                         
            ?>
            </div>
            
        </div>
        </body>

        </html>
