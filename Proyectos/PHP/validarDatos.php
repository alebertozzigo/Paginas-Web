   
<?php
    class validarDatos{
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
        
        function validarNombre($global1){
            if($global1 == 1 and ( empty($_POST['c_name']) ) ){
                return "<div class = 'error'> <li>Campo vacio </div>";
            }else{return "";}
        }
        function validarUsuario($global1){
            if($global1 == 1 and ( empty($_POST['c_user']) ) ){
                return "<div class = 'error'> <li>Campo vacio </div>";
            }else{return "";}
        }
        function validarApellido1($global1){
            if($global1 == 1 and ( empty($_POST['c_lastname1']) ) ){
                return "<div class = 'error'> <li>Campo vacio </div>";
            }else{return "";}
        }
        function validarApellido2($global1){
            if($global1 == 1 and ( empty($_POST['c_lastname2']) ) ){
                return "<div class = 'error'> <li>Campo vacio </div>";
            }else{return "";}
        }
        function validarTelefono($global1){
            if($global1 == 1 and ( empty($_POST['c_number']) ) ){
                return "<div class = 'error'> <li>Campo vacio </div>";
            }else{return "";}
        }
        function validarCorreo($global1){
            if($global1 == 1 and ( empty($_POST['c_email']) ) ){
                return "<div class = 'error'> <li>Campo vacio </div>";
            }else{return "";}
        }
        function validarPass($global1){
            if($global1 == 1 and ( empty($_POST['c_pass']) ) ){
                return "<div class = 'error'> <li>Campo vacio </div>";
            }else{return "";}
        }
        }


?>