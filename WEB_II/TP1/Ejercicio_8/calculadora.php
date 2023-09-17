<?php

require_once('operaciones.php');


$operand1 = $_REQUEST['value1'];
$operand2 = $_REQUEST['value2'];

$operator = $_REQUEST['operation'];

switch($operator){
    case 'addition': {
        $resultado = addition($operand1, $operand2); 
        break;
    }

    case 'substract': {
        $resultado = substraction($operand1, $operand2); 
        break;
    }

    case 'multiply': {
        $resultado = multiply($operand1, $operand2); 
        break;
    }

    case 'divide': {
        $resultado = divide($operand1, $operand2); 
        break;
    }

    default:{
        echo('Operacion no definida');
        break;
    }
}
echo('El resultado es: ' . $resultado);
