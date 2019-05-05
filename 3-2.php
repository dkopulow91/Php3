<?php
$myArray = [
    'Московская область' => ['Одинцово','Красногорск','Лобня'],
    'Калужская область' => ['Калуга','Боровск','Малоярославец'],
];
foreach ($myArray as $key => $value) {
    echo $key.': <br>';
    foreach ($value as $city) {
        echo $city.'<br>';
    }
}
