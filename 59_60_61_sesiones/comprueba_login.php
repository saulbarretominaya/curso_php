
<?php


try {


    $objconexion = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
    $objconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "select * from usuarios where usuario=:m_usuario and password=:m_password";

    $resultado = $objconexion->prepare($sql);

    $usuario = htmlentities(addslashes($_POST["usuario"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":m_usuario", $usuario);
    $resultado->bindValue(":m_password", $password);

    $resultado->execute();

    $numero_registros=$resultado->rowCount();

    if($numero_registros!= 0){


        session_start();

        //Variable super global
        $_SESSION["usuario"]=$_POST["usuario"];
        $_SESSION["password"]=$_POST["password"];

        echo header("location:usuario_registrados.php");

    }else {

        echo header("location:login.php");

    }

} catch (Exception $e) {

    echo "Error: " . $e->getLine();
}


?>

