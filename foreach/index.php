<?php

$myarray = ['pippo', 'pluto', 'paperino'];

for ($i = 0; $i < count($myarray); $i++) { //count è lo stesso di .length in js!
    echo $myarray[$i] . '<br>';
}

echo '<hr/>';

foreach($myarray as $valore) {
    echo $valore . '<br>';
}


$myarrayAssociativo =   [ 
                            'nome' => 'Mario',
                            'cognome' => 'Rossi',
                            'eta' => '40'
                        ];

foreach($myarrayAssociativo as $chiave => $valore) {

    echo 'Chiave: ' .  $chiave . ' - Valore: ' . $valore . '<br>';

}
                

$animali = [
    'mammiferi' => ['cane', 'gatto', 'cavallo', 'maiale'],
    'uccelli' => ['anatra', 'gallina']
];

foreach($animali as $key => $classeAnimale) {
    foreach($classeAnimale as $animale) {
        echo $animale . '<br>';
    }
}
