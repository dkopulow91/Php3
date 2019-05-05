<?php
$myArray = [
    'Московская область' => ['Одинцово','Красногорск','Лобня'],
    'Калужская область' => ['Калуга','Боровск','Малоярославец'],
];
foreach ($myArray as $obl => $city) {
    /*echo $key.': <br>';*/
    foreach ($city as $key => $value) {
        if(mb_substr($value,0,2) == "К");
            echo $value.'<br>';
    }
}