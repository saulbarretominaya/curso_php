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
  // ------------------------------- Ininio de paginacion-------------------------------------

  $tamaño_paginas = 3; //muestra cuantos registros veo por pagina

  if (isset($_GET["pagina"])) {

    if ($_GET["pagina"] == "1") {
      echo header("Location:index.php");
    } else {

      $pagina = $_GET["pagina"];
    }
  } else {

    $pagina = 1; //pretende mostrar la pagina en la que estamos al cargar nuestra pagina web
  }
  $empezar_desde = ($pagina - 1) * $tamaño_paginas;

  $sql = "select * from datos_usuarios where estado='1'";
  $resultado = $base->prepare($sql);
  $resultado->execute(array());

  $num_filas = $resultado->rowCount(); //devuelve el numero de filas de un array

  $total_paginas = ceil($num_filas / $tamaño_paginas); //devuelve el numero total de paginas hacia arriba, verificar en la pagina de php. 
  // ------------------------------- Fin de paginacion-------------------------------------



  $query = $base->query("select * from datos_usuarios where estado='1' LIMIT $empezar_desde,$tamaño_paginas");
  $registros = $query->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["insertar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];

    $query = "insert into datos_usuarios (nombre,apellido,direccion,estado) values (:nombre,:apellido,:direccion,:estado)";
    $resultado = $base->prepare($query);
    $resultado->execute(array(":nombre" => $nombre, ":apellido" => $apellido, ":direccion" => $direccion, ":estado" => "1"));

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

  <?php

  // Total de paginas 
  for ($i = 1; $i <= $total_paginas; $i++) {
    echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
  }

  ?>
</body>

</html>