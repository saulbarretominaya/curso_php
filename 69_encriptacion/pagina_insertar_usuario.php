<?php

try {


    $objconexion = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
    $objconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $usuario=$_POST["usuario"];
    $password=$_POST["password"];

    //$passcifrado=password_hash($password,PASSWORD_DEFAULT); //Esto genera la sal automatica.

    $sql = " insert into usuarios (usuario,password) values (:usu, :pas)";

    $resultado = $objconexion->prepare($sql);

    $resultado->execute(array (":usu"=>$usuario,":pas"=>$passcifrado));

    echo "Registro insertado";

    $resultado->closeCursor();

} catch (Exception $e) {

    echo "Error en la sgte. Linea " . $e->getLine();
}
