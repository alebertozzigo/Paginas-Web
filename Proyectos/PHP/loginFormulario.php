<?php 
include_once "conexion.php";
$db = BaseDatos::getInstance();
$user = $_POST['c_user'];
$pass = $_POST['c_pass'];
//echo "usuario " . $_POST['c_user'] . " password " .$_POST['c_pass']; 
if(empty($user) or empty($pass)){
    echo "<script>
                alert('Complete todos los datos');
                window.location= 'inicio.html'
    </script>";
}
$row = $db->autentico($user,$pass);


if($row){
	//header ("location:modificarpass.html");
	//header ("location:modificarpass.php/id=".$row["idUsuario"]);
	$row = $db->recuperar($user, $pass);
	$direccion = "modificarpass.php?id=".$row["idUsuario"];
	//echo $direccion;
	//header ($direccion);
	echo "<script>
                
                window.location= '".$direccion."'
    </script>";
    
}else{
	//header ("location:inicio.html");
	echo "<script>
                alert('Inicio de sesion incorrecto, revise los datos ingresados');
                window.location= 'inicio.html'
    </script>";
};
$db->desconectar();
?>
