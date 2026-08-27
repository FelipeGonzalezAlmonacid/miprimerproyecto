<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email." - ".$password;
    echo '<br>';
    //para mostrar los valores recibidos en una peticion
    print_r($_POST);
    
    //algoritmo de login, validar email y password, si son correctos, redirigir a 
    // otra pagina, si no son correctos, mostrar un mensaje de error
    if($email == "a@a.cl" && $password == "1234") {
        echo "Login exitoso";
        //redireccionar a otra pagina
    }else {
        echo "Login fallido";
    }


?>