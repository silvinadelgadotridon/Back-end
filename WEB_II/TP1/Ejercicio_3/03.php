<!-- Escribir un programa que mediante un formulario un usuario pueda ingresar su nombre, apellido y edad, 
para que sean enviados mediante POST. El programa, debe recibir los datos y mostrar la información por pantalla. -->

<?php
    /* METODO POST
    print_r($_POST);
    $apellido = $_POST['surname'];
    $nombre = $_POST['name'];
    $edad = $_POST['age'];
    echo('<br>');
    echo('Apellido: ' . $apellido);
    echo('<br>');
    echo('Nombre: ' . $nombre);
    echo('<br>');
    echo('Edad: ' . $edad);
    echo('<br>');
    */

    /* METODO GET
    if(isset($_GET['surname'])){    //verifico si la variable surname está definida y no es nula
        $apellido = $_GET['surname'];
        $nombre = $_GET['name'];
        $edad = $_GET['age'];
        echo('<br>');
        echo('Apellido: ' . $apellido);
        echo('<br>');
        echo('Nombre: ' . $nombre);
        echo('<br>');
        echo('Edad: ' . $edad);
        echo('<br>');
    }
    */

    //Genero validaciones de datos en el servidor. Ningún campo puede estar vacío. 
    
    if(empty($_REQUEST['surname']) || empty($_REQUEST['name'])|| empty($_REQUEST['age'])){
        echo "Debe completar todos los campos para enviar el formulario";
        echo "<br>";
    
    }
    
    else{   
        $apellido = $_GET['surname'];
        $nombre = $_GET['name'];
        $edad = $_GET['age'];

        echo('<br>');
        echo('Apellido: ' . $apellido);
        echo('<br>');
        echo('Nombre: ' . $nombre);
        echo('<br>');
        echo('Edad: ' . $edad);
        echo('<br>');
    }

?>

<a href='03.html'> Volver</a>