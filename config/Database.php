<?php
class Database{
    public $host = 'localhost'; /* Servidor */
    public $user = 'root'; /* Usuario de phpMyadmin */
    public $pass = ''; /* Contraseña de phpMyadmin*/
    public $db = 'clientes'; /* Base de datos */
    public $conexion;
    /* Métpdp constructor, este método será el primero que se ejecute al momento de llamar la clase Database. */
    function connectToDatabase(){
        $this->conexion = mysqli_connect( $this->host, $this->user, $this->pass, $this->db );

        if ( mysqli_connect_error () ){
            echo ' Error de conexion ' . mysqli_connect_error ();
        }

        return $this->conexion;

    }

    }

    ?>
    