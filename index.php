<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="num1" placeholder="Number 1" autocomplete="off"> 
        <input type="text" name="num2" placeholder="Number 2" autocomplete="off">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">CALCULATE</button>
    </form>
<p>The answer is:</p>
<?php
include ("calculate.php")
?>
</body>
</html>