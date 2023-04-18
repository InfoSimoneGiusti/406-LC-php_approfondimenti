<?php

    $cicciobello = '';

    if (isset($_GET['name'])) {
        $cicciobello = $_GET['name'];
    } else {
        $cicciobello = 'Nessun nome passato!';
    }

    $cicciobello = isset($_GET['name'])?$_GET['name']:'Nessun nome passato!';

    $cicciobello = $_GET['name']??'Nessun nome passato!';

    echo "Ciao " . $cicciobello;