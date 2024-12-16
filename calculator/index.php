<?php
declare(strict_types=1);
include 'includes/auto_load.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="includes/calc.inc.php" method="Post">
<p> My own calculator!</p>
<input type="number" name="num1" placeholder='first number'>
<select name="oper">
    <option value"add">Addition</option>
    <option value"sub">substraction</option>
    <option value"div">division</option>
    <option value"mul">multiplication</option>
</select>
<input type="number" name="num2" placeholder='second number'>
<button type="submit" name="submit">Calculate</button>
</form>



    
</body>
</html>

