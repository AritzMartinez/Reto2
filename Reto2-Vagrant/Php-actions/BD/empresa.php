<?php
//Funcion para insertar empresa
function insertEmpresa($dbh,$nombre,$email,$telefono,$direccion){
    $data = array('nombre' => $nombre,'email' => $email,'telefono' => $telefono,'direccion'=> $direccion);

    $stmt = $dbh->prepare("INSERT INTO Empresa (nomEmpresa, telefono, email, direccion) VALUES (:nombre, :telefono, :email, :direccion)") ;
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
}