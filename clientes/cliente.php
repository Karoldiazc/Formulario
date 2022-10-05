<?php

include_once('../config/config.php');
include('../config/Database.php');

class clientes{
    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }
    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params ['email'];
        $celular = $params['celular'];
        $utiles = $params['utiles'];

        $insert = "INSERT INTO client VALUES (NULL, '$nombres', '$apellidos', '$email', '$celular', '$utiles')";
        return mysqli_query($this->conexion, $insert);

    }
    function getAll(){
        $sql ="SELECT * FROM client ORDER BY nombres ASC";
        return mysqli_query($this->conexion, $sql); 
    }
    
    function getOne($id){
        $sql= "SELECT * FROM client WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update ($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params ['email'];
        $celular = $params['celular'];
        $utiles = $params['utiles'];
        $id = $params['id'];

        $update = "UPDATE client SET nombres='$nombres', apellidos='$apellidos', email='$email', 
        celular='$celular', utiles='$utiles' WHERE id = $id ";
        return mysqli_query($this->conexion, $update);

    }

    function delete($id){
        $delete = "DELETE FROM client WHERE id = $id";
        return mysqli_query($this->conexion, $delete);
        
    }
}
?>