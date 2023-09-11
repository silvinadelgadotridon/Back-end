<!-- Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. -->

<h3>Ejercicio 2</h3>

<?php

    echo "<ul>";
        for($i=0; $i<10; $i++){
            echo "<li>" . $i . "</li>";
        }
    echo "</ul>";
