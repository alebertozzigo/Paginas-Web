estrellas = ["ale","arg","esp","colo","costa","aus","usa","fran","ita","mex"];

escritura=[ "aleT","argT","espT","coloT","costaT","ausT","usaT","franT","itaT","mexT"
]

tipoCambio=[0.90981,59.20118,0.90981,3454.56613,571.04,1.48590,1.0,0.90981,0.90981,20.06485]

var inputAconvertir;
var valorAconvertir;
var indiceInput;

function esconder(){
    for(var i=0;i<estrellas.length;i++){
    document.getElementById(estrellas[i]).style.visibility="hidden";
    }

}

window.onload = function() {
    esconder();
}

function bandera(ident){
    
    /*var pos = document.getElementsByTagName("filaEstrellas");
    for(var i=0;i<pos.length;i++){
        pos[i].disabled =true;
    }*/
    if(document.getElementById(ident).style.visibility == "visible"){
        document.getElementById(ident).style.visibility="hidden"
    }
    else{document.getElementById(ident).style.visibility="visible";}
    
}

function bloquear(ident1){
    inputAconvertir = ident1;
    for(var i=0;i<escritura.length;i++){
        if(escritura[i] == ident1){
            indiceInput = i;
        }
        else{
         document.getElementById(escritura[i]).disabled=true;
        }
    }
    
}

function desbloquear(){
    for(var i=0;i<escritura.length;i++){
        
        
         document.getElementById(escritura[i]).disabled=false;
    } 
}

function convertir(){
    
    valorAconvertir=parseFloat(document.getElementById(inputAconvertir).value);
        
    
    valorAconvertir = valorAconvertir/tipoCambio[indiceInput];
        
    for(var i=0;i<10;i++){
            
            if(document.getElementById(estrellas[i]).style.visibility == "visible"){
            /*si esta visible entonces convierto a esa moneda*/
            var valorMonedaActual = valorAconvertir * tipoCambio[i] ;
            document.getElementById(escritura[i]).value = valorMonedaActual;      
          }
    
    }
}



function limpiar(){
    esconder();
    desbloquear();
    /*borrar numeros de inputs*/
    for(var i=0;i<escritura.length;i++){
        
         document.getElementById(escritura[i]).value = '';   
    }

}
