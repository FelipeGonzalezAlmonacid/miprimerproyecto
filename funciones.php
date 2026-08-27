<?php 

function mi_funcion(){
    echo "hola mundo funcion";
    echo "<br>";
}
function mi_funcion_parametros($n){
    //concatenacion
    echo "Hola ".$n;
}
 function mi_funcion_retorno(){
    return "mensaje 100";
 }




mi_funcion();
mi_funcion_parametros("Felipe");
echo mi_funcion_retorno();
