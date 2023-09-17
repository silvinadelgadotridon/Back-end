<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale= 1.0">
            <meta http-equiv="X-UA-Compatible" content="ie-edge">
            <link rel="stylesheet" href="css/style.css">
            <title>Pi</title>
            <!-- <script src="https://code.jquery.com/jquery.git.min.js"></script> -->
        </head>

        <body>

            <nav id="main">
                <ul>
                    <li><a href="index.html">Calculadora</a></li>
                    <li><a href="pi.php">Número Pi</a></li>
                    <li><a href="about.html">Acerca de los autores</a></li>
                </ul>
            </nav>

            <h1>Número Pi</h1>
                
            <?php
                echo('El valor del númeor Pi es: ' . pi());
            ?>

            
        </body>
    </html>


