<?php

function addition ($op1, $op2){
    $res = $op1 + $op2;
    return $res;
}

function substraction ($op1, $op2){
    $res = $op1 - $op2;
    return $res;
}

function multiply ($op1, $op2){
    $res = $op1 * $op2;
    return $res;
}

function divide ($op1, $op2){
    if($op2 != 0){
        $res = $op1 / $op2;
    }
    else{
        echo('El denominador debe ser distinto de cero');
    }
    
    return $res;
}