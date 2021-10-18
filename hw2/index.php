<?php

// 1 ЗАДАНИЕ

function compareNumbers($a, $b){

    if ($a >= 0 && $b >= 0 ){
        return ($a - $b);
    } else if ($a < 0 && $b < 0 ){
        return ($a * $b);
    } else if (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)){
        return ($a + $b);
    } else echo "none";
}

echo compareNumbers(-2, 13);

// 2 ЗАДАНИЕ

$a = 12;

switch($a){
    case 1:
        echo 1;
    case 2:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8:
        echo 8;
    case 9:
        echo 9;
    case 10:
        echo 10;
    case 11:
        echo 11;
    case 12:
        echo 12;
    case 13:
        echo 13;
    case 14:
        echo 14;
    case 15:
        echo 15;
    default:
    echo "END!";
}

// 3 ЗАДАНИЕ

function sum($c, $d){
    return $c + $d;
}
echo sum(5, 5);

function dif($c, $d){
    return $c - $d;
}
echo dif(5, 5);

function mult($c, $d){
    return $c * $d;
}
echo mult(5, 5);

function div($c, $d){
    return $c / $d;
}
echo div(5, 5);

// 4 ЗАДАНИЕ

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "sum":
            return sum($arg1, $arg2);
            break;
        case "dif":
            return dif($arg1, $arg2);
            break;
        case "mult":
            return mult($arg1, $arg2);
            break;
        case "div":
            return div($arg1, $arg2);
            break;
    }
}

echo mathOperation(3, 6, "div");

// 6 ЗАДАНИЕ

function power($val, $pow){
    if ( $pow != 0) {
        return ($val * power($val, --$pow ));
    } 
    return 1;
};

echo power(11, 2);

// 7 ЗАДАНИЕ



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<footer>
    <?php echo date(Y) ?>
</footer>
</html>

