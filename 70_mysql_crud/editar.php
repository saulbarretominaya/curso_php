<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

  <?php

  include("conexion.php");

  if (!isset($_POST['boton_actualizar'])) {

    $id = $_GET["id"];
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $direccion = $_GET["direccion"];
  } else {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];


    $query="update datos_usuarios set nombre=:nombre, apellido=:apellido, direccion=:direccion where id=:id";
    $resultado=$base->prepare($query);
    $resultado->execute(array(":id"=>$id,":nombre"=>$nombre,":apellido"=>$apellido,":direccion"=>$direccion));
    header("location:index.php");

  }

  ?>

  <h1>CRUD<span class="subtitulo">Actualizar</span></h1>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <table width="50%" border="0" align="center">

      <input type='hidden' name='id' size='10' value="<?php echo $id ?>">
      <tr>
        <td>Nombre</td>
        <td><input type='text' name='nombre' size='10' value="<?php echo $nombre ?>"></td>
      </tr>
      <tr>
        <td>apellido</td>
        <td><input type='text' name='apellido' size='10' value="<?php echo $apellido ?>"></td>
      </tr>
      <tr>
        <td>Direccion</td>
        <td><input type='text' name='direccion' size='10' value="<?php echo $direccion ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><input type='submit' name='boton_actualizar' size='10' value="Actualizar"></td>
      </tr>
    </table>
  </form>

</body>

</html>