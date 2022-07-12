<?php
if (isset($_POST["submit"])){
    $result1 = $_POST["num1"];
    $result2 = $_POST["num2"];
    $operator = $_POST["operator"];
    switch($operator){
        case "None":
            echo "You need to select an operand!";
        break;
        case "Add":
            echo $result1 + $result2;
        break;
        case "Subtract":
            echo $result1 - $result2;
        break;
        case "Multiply":
            echo $result1 * $result2;
        break;
        case "Divide":
            echo $result1 / $result2;
        break;
    }
}
?>