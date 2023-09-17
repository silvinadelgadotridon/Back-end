<link href="layout/style.css" rel="stylesheet" type="text/css"> 
<!-- por que anda asi? -->

<?php
    // print_r($_REQUEST);
    if (!isset($_REQUEST['investment']) || $_REQUEST['investment'] <= 0 || !isset($_REQUEST['interest']) || $_REQUEST['interest'] <= 0){
        echo('Debe ingresar valores mayores a cero');
    }
    else{
        $investment= $_REQUEST["investment"];
        $interest = $_REQUEST["interest"];
        calcularinteres($investment, $interest);
    }


    function calcularinteres($investment, $interest){
        $total = 0;
        
        echo "<table>";
        echo "<thead>";
        echo "<th>Mes</th>";
        echo "<th>Interés mensual</th>";
        echo "<th>Ganancia mensual</th>";
        echo "<th>Total acumulado</th>";
        echo "</thead>";

        echo "<tbody>";
        for ($i=1; $i <= 12; $i++ ){
            $gain = $investment*$interest/100;  
            $total = $investment + $gain;
            $investment = round($total, 1);
            echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$interest%</td>";
                echo "<td>$$gain</td>";
                echo "<td>$$total</td>";
            echo "</tr>";
        }
        echo "</tbody>";
    echo "</table>";
    }
