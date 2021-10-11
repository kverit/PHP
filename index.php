<?php

// 2 ЗАДАНИЕ

echo 'Hello, World!';

$name = "GeekBrains user";
echo "Hello, $name!";

define('MY_CONST', 100);
echo MY_CONST;

$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";

$a = 1;
echo "$a";
echo '$a';

$a = 10;
$b = (boolean) $b;

$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;

// 3 ЗАДАНИЕ

$a = 5;
$b = '05';
var_dump($a == $b);  // Выполняется сравнение по значению. Переменные неявно приводятся к одному значению, получается true.
var_dump((int)'012345');  // Строковое значение приводится к числовому. Получается 12345?
var_dump((float)123.0 === (int)123.0); // Выполняется сравнение по типу и значению. Типы отличаются. Получается false
var_dump((int)0 === (int)'hello, world'); // Строка 'hello, world', приводится к числовому значению, на выходе 0. Получается true. 


// 5 ЗАДАНИЕ

$a = 1;
$b = 2;
$b = $b - $a;
$a = $a + $b;

