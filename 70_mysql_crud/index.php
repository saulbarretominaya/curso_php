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


  $query = $base->query("select * from datos_usuarios where estado='1'");
  $registros = $query->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["insertar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];

    $query = "insert into datos_usuarios (nombre,apellido,direccion,estado) values (:nombre,:apellido,:direccion,:estado)";
    $resultado=$base->prepare($query);
    $resultado->execute(array(":nombre"=>$nombre,":apellido"=>$apellido,":direccion"=>$direccion,":estado"=>"1"));

    header("location:index.php");

  }

  ?>

  <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>


  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>


      <?php foreach ($registros as $persona) { ?>

        <tr>
          <td><?php echo $persona->id ?></td>
          <td><?php echo $persona->nombre ?></td>
          <td><?php echo $persona->apellido ?></td>
          <td><?php echo $persona->direccion ?></td>

          <td class="bot"><a href="borrar.php?id=<?php echo $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
          <td class='bot'><a href="editar.php?id=<?php echo $persona->id ?>&nombre=<?php echo $persona->nombre ?>&apellido=<?php echo $persona->apellido ?>&direccion=<?php echo $persona->direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>

        </tr>

      <?php } ?>

      <tr>
        <td></td>
        <td><input type='text' name='nombre' size='10' class='centrado'></td>
        <td><input type='text' name='apellido' size='10' class='centrado'></td>
        <td><input type='text' name=' direccion' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='insertar' value='Insertar'></td>
        <td class="sin">&nbsp;</td>
      </tr>
    </table>
  </form>
</body>

</html>