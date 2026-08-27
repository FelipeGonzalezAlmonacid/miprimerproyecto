<?php 
    //Imprimir mensajes:
    echo "Hola Mundo PHP"; 
    echo "<br>";

    //declarar Variables:
    $nombre = "Ariel";
    $numero_entero = 20;
    $numero_float = 2.66;
    $arreglo = array(1,2,3,4,5,6,7);
    $arreglo_ = [1,2,3,4,5,6];
    if($numero_entero > 10 && 1 == 1){ //y
        echo "paso barrera";
        echo "<br>";

    }else{
        echo "no pasa";
    }
    if($numero_entero > 10||1==1){
        echo "siempre se mostrara por ser ó";
        echo "<br>";

    }
     //ciclos iterativos
    for($i=0;$i<=10;$i++){
        echo $i;
    }
    echo "<br>";

    $inicio =0;
    while($inicio < 10){
        echo $inicio;
        $inicio++;
    }
    
?>