<?php
$Operacion = $_GET["Operacion"];
$Numero1 = $_GET["Numero1"];
$Numero2 = $_GET["Numero2"];

switch ($Operacion) {
    case "sum":
        sum($Numero1,$Numero2);
        break;
    case "res":
        res($Numero1,$Numero2);
        break;
    case "div":
        div($Numero1,$Numero2);
        break;
    case "mul":
        mul($Numero1,$Numero2);
        break;
    case "cuad":
        cuad($Numero1);
        break;
}

function sum($Numero1,$Numero2){
    echo $Numero1."+".$Numero2."=".$Numero1+$Numero2;
}
function res($Numero1,$Numero2){
    echo $Numero1."-".$Numero2."=".$Numero1-$Numero2;
}
function mul($Numero1,$Numero2){
    echo $Numero1."x".$Numero2."=".$Numero1*$Numero2;
}
function div($Numero1,$Numero2){
    echo $Numero1."/".$Numero2."=".$Numero1/$Numero2;
}
function cuad($Numero1){
    echo "Cuadrado de ".$Numero1."=".$Numero1*$Numero1;
}
