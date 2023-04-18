<?php

$myarrayAssociativo =  [
                'nome' => 'Mario',
                'cognome' => 'Rossi'
            ];

$myarrayNormale = ['pippo', 'pluto'];

$team = [
    [
        'nome'=>'Mario',
        'cognome'=>'Rossi'
    ],
    [
        'nome'=>'Giacomo',
        'cognome'=>'Verdi'
    ],
];

echo $team[1]['cognome'];

echo "<pre>";
var_dump($myarrayAssociativo);
echo "</pre>";

echo "<hr>";

echo "<pre>";
var_dump($myarrayNormale);
echo "</pre>";

echo "<hr>";
echo $myarrayAssociativo['cognome'];

$myarrayNormale[] = 'paperino';

$myarrayAssociativo['eta'] = '40';

echo "<pre>";
var_dump($myarrayAssociativo);
echo "</pre>";

echo "<hr>";

echo "<pre>";
var_dump($myarrayNormale);
echo "</pre>";