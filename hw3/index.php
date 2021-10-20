<?php

// 1

$i = 1;

while ( $i <= 100) {
    if ($i % 3 === 0) {
        echo $i++;
    }
    $i++;
}
;

// 2

$a = 0;

do {
    if ($a == 0) {
        echo $a . ' – ноль.';
        $a++;
    } elseif ($a % 2 != 0) {
        echo $a . ' – нечетное число.';
        $a++;
    } else {
        echo $a . ' – четное число.';
        $a++;
    }
} while ($a <= 10);

// 3

$districts = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область:' => ['Рязань', 'Касимов', 'Ряжск', 'Скопин']
];

function showTown($array){
    foreach ($array as $index => $item) {
        echo $index;
        $arrayLenght = count($array[$index]);
        for ($i = 0; $i < $arrayLenght; $i++) {
            if ($i == $arrayLenght - 1) {
                echo $array[$index][$i] . '.';
            } else {
                echo $array[$index][$i] . ', ';
            }
        }
    }
}

showTown($districts);

// 4

function translitiration($string){

    $rus = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё',	'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'];
    $eng = ['A', 'B', 'V', 'G', 'D', 'E', 'E', 'ZH', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'KH', 'TS', 'CH', 'SH', 'SCH', 'Y', 'E', 'YU', 'YA'];
    
    return str_replace($rus, $eng, $string);
}

// 5

function replace($string){
    return str_replace(' ', '_', $string);
}

// 6

$districtsUlLi = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область:' => ['Рязань', 'Касимов', 'Ряжск', 'Скопин']
];

function menu($array){
    $renderArr[] = '<ul>';
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menu($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menu($districtsUlLi);

// 7

for ($i = 0; $i < 10; print $i++) {
};

// 8  Не получилось!!!!!

function searchCity($array){
    $char = 'К';
    foreach ($array as $key => $value) { 
        $explodeStr = mb_str_split($value);
            if ($explodeStr[0] == $char) {
                echo $explodeStr[0];
            } 
    }
}

echo searchCity($districts);

// 9

function translitirationSpace($string){

    $rus = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё',	'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', ' '];
    $eng = ['A', 'B', 'V', 'G', 'D', 'E', 'E', 'ZH', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'KH', 'TS', 'CH', 'SH', 'SCH', 'Y', 'E', 'YU', 'YA', '_'];
    
    return str_replace($rus, $eng, $string);
}