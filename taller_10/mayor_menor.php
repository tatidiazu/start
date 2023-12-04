<?php
include 'mayor_menor.html';

    $edad = 0;
    #comentario: const constante_0 = 18;
    const constante_18 = 18; 
    // opción dos de constante
    //define ("constante_0","0");
    define ('constante0',"0");

    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >= 18) {
            echo "<h1>Es mayor de edad</h1>";
        }
        #comentario: else if (18> $edad && 0 < $edad)
        else if ($edad < constante_18 && $edad > constante0) {
            echo "<h1>Es menor de edad</h1>";
        }else{
            echo "<h1>No valido</h1>";
        }
    }
    ?>
