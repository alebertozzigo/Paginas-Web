<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modificar Constraseña</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
<?php
$id = $_GET["id"];
include_once "conexion.php";
$db = BaseDatos::getInstance();
$row = $db->recuperar2($id);
echo "<h2> &#129333 Id: " . $row["idUsuario"] . " - User: " . $row["user"] . " - Nombre: " . $row["nombre"]. $row["apellido1"]. $row["apellido2"]."</h2>";
$db->desconectarse();
$direccion = "modificarpassFormulario.php?id=".$id;
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Cambiar contraseña</h5> 
            <form action="<?php echo $direccion ?>" method="POST" class="form-signin">
              <div class="form-label-group">
                <input type="password" id="password" name="c_pass" class="form-control" >
                <label for="password">Contraseña nueva</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Modificar</button>
			  <center>
				  <a href="inicio.html" class="btn btn-lg btn-primary btn-block text-uppercase">Regresar</a>
				  <!-- <a href="cambiarcontrasena.html">Modificar Constraseña</a> -->
			  </center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
