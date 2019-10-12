<!DOCTYPE html>
<html lang="en">


<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilos.css">
   <style>
                .error{
                color: red;
                font-size: 15px;
                }
               .error1{
                  color: red;
                  font-size: 15px;
                  text-align: center;
                   }
       
             </style>
  
</head>

<body>

    
<?php
        include_once "validarDatos.php";
        include_once "conexion.php";
        $n = new validarDatos();  
        $global = 0;
        $r=0;
        
        $db = BaseDatos::getInstance();
        
        if(isset($_POST['c_user']) ) {
            $global =1;

            $user = $_POST['c_user'];
            $nombre = $_POST['c_name'];
            $apellido1 = $_POST['c_lastname1'];
            $apellido2 = $_POST['c_lastname2'];
            $email = $_POST['c_email'];
            $telefono = $_POST['c_number'];
            $pass = $_POST['c_pass'];
            $errores = array();
            if($email=="" || strpos($email,"@")==false ) {
                array_push($errores,"Formato de correo inválido"); 
            }
        $res = $n->validar_clave($pass);
        
        switch( $res){
            case 1 :
                array_push($errores,"La clave debe tener al menos 8 caracteres");
                break;
            case 2:
                array_push($errores, "La clave debe tener al menos una letra minúscula");
            case 3:
                array_push($errores,  "La clave debe tener al menos una letra mayúscula");
            case 4:
                 array_push($errores,  "La clave debe tener al menos un caracter numérico");
                
        }
        
        if(count($errores)>0){
            
            $r=1;
                  
            
        } else{

            $row = $db->ingresar($user,$pass, $nombre, $apellido1, $apellido2, $email, $telefono);

            if($row){
                echo "<script>
                            alert('Registro Exitoso');
                            window.location= 'inicio.html'
                </script>";

            }else{
                echo "<script>
                            alert('No se pudo registrar, revise los datos y vuelva a intentar');
                            window.location= 'registro.php'
                </script>";
            }
        }
        
        }
 
$db->desconectarse();

?>



<script>
    function volver(){
        window.location ='inicio.html';
    }
</script>


 
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Registro</h5>
            
             <form action="registro.php" method="POST" class="form-signin">
        
 <div class="form-label-group">
                <input type="text" id="name" name="c_name" class="form-control"  >
                <label for="name">Nombre</label>
                <?php echo $n->validarNombre($global);  ?>
              </div>
              
              

              <div class="form-label-group">
                <input type="text" id="user" name="c_user" class="form-control" >
                <label for="user">Nombre de Usuario</label>
              <?php echo $n->validarUsuario($global); ?>
              </div>
              
               
               <div class="form-label-group">
                <input type="text" id="lastname1" name="c_lastname1" class="form-control" >
                <label for="lastname1"> Primer Apellido</label>
              <?php echo $n->validarApellido1($global);  ?>
               </div>
             
               
               <div class="form-label-group">
                <input type="text" id="lastname2" name="c_lastname2" class="form-control">
                <label for="lastname2">Segundo Apellido</label>
              <?php echo $n->validarApellido2($global);  ?>
              </div>
              
              
               <div class="form-label-group">
                <input type="text" id="email" name="c_email" class="form-control"  >
                <label for="email">Correo Electronico</label>
              <?php echo $n->validarCorreo($global); ?>
              </div>
              
              
               <div class="form-label-group">
                <input type="text" id="number" name="c_number" class="form-control" >
                <label for="number">Telefono</label>
              <?php echo $n->validarTelefono($global);  ?>
              </div>
              
              
               <div class="form-label-group">
                <input type="password" id="password" name="c_pass" class="form-control" >
                <label for="password">Contraseña</label>
                <?php echo $n->validarPass($global);  ?>    
              </div>
              
                   <?php  if( $r == 1) { 
                         echo " <div class = 'error1'>";
                         for($i=0; $i<count($errores) ; $i++){
                            echo "<li>".$errores[$i];
                            }
                        echo "</div>";
                    }?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >Registrarme</button>
			  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button" onclick="volver()" >Volver</button>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>

