<?php 
include_once "conexion.php";
$db = BaseDatos::getInstance();
$id = $_GET['id'];
$pass = $_POST['c_pass'];
//echo "HOLA".$id;
//echo "usuario " . $_POST['c_user'] . " password " .$_POST['c_pass'];
$direccion = "modificarpass.php?id=".$id;       
function validar_clave($clave){
           if(strlen($clave) < 8){
              return 1;
           }           
           if (!preg_match('`[a-z]`',$clave)){         
              return 2;
           }
           if (!preg_match('`[A-Z]`',$clave)){
             
              return 3;
           }
           if (!preg_match('`[0-9]`',$clave)){
             
              return 4;
           }
           
           return 0;
        }
        $res = validar_clave($pass);
            switch( $res){
            case 1 :
               echo "<script>
                    alert('Error, debe contener 8 caracteres');
                     window.location= '".$direccion."'
                    </script>";
                break;
            case 2:
                echo "<script>
                    alert('Error, debe contener una minuscula');
                     window.location= '".$direccion."'
                    </script>";
                break;
            case 3:
               echo "<script>
                    alert('Error, debe contener una mayuscula');
                     window.location= '".$direccion."'
                    </script>";
                break;
            case 4:
                 echo "<script>
                    alert('Error, debe contener 1 numero');
                     window.location= '".$direccion."'
                    </script>";
                break;
            case 0:
                 $row = $db->modificar($id, $pass);
                //$row = $db->autentico($user,$pass);
                if($row){
                    //header ("location:modificarpass.html");
                    //header ("location:modificarpass.php/id=".$row["idUsuario"]);
                    
                    //echo $direccion;
                    //header ($direccion);
                    echo "<script>
                                alert('Password Modificada');
                                window.location= '".$direccion."'
                    </script>";
                }else{
                    $direccion = "modificarpass.php?id=".$id;
                    //echo $direccion;
                    //header ($direccion);
                    echo "<script>
                                alert('Ha ocurrido un error');
                                window.location= '".$direccion."'
                    </script>";
                };
        }


$db->desconectar();
?>
