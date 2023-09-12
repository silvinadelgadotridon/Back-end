<?php
    if(isset($_REQUEST['weight']) && isset($_REQUEST['high'])&& $_REQUEST >0){
        $weight = $_REQUEST['weight'];
        $high = $_REQUEST['high'];
        calcularIMC($weight, $high);
    } 
    
    function calcularIMC($weight, $high){
        $imc = $weight/($high ** 2);
        categorizar($imc);
        echo('<br>');
        echo('Su indice de masa corporal es de' . $imc );
        
    }

    function categorizar($imc){

        if($imc < 18.50){
            echo ('Posee un bajo peso');
        }

        elseif($imc >= 18.50 && $imc < 24.99){
            echo ('Posee un peso normal');
        }
        elseif($imc > 25.00 && $imc<30){
            echo ('Posee sobrepeso');
        }
        elseif($imc >= 30){
            echo ('Posee obesidad');
        }

    }
    ?>
    <a href='05.html'> Volver</a>