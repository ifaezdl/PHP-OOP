<?php

declare(strict_types = 1);
include 'auto_load.inc.php';
$oper=$_POST['oper'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];

try {
    $calc=new Calc($oper,(int)$num1,(int)$num2);
    echo $calc->calculator();
} catch (TypeError $th) {
   echo $th->getMessage();
}

?>