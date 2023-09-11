<?php

$cantidad = $_GET['cantidad'];
// echo $cantidad;


// print_r($ciudades);

for ($i=1; $i<=$cantidad; $i++){

    echo "<li> Item " . $i . "</li>";

}
echo "<br>";
echo "<a href='04.html'>Volver a inicio</a>";