<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica parole</title>
    <style>
        .green {
            color: green;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>
    
    <?php

        $paroleAutorizzate = ['pippo', 'pluto', 'paperino', 'segreta'];

        $tag = '';

        if (!empty($_GET['parola'])) {
            $parola = $_GET['parola'];

            $class = '';
            $testo = '';

            if (in_array($_GET['parola'], $paroleAutorizzate)) {
                $class = 'green';
                $testo = "La parola è presente nell'array!";
            } else {
                $class = 'red';
                $testo = "La parola non è presente nell'array!";
            }

            $tag = "<h2 class='". $class . "'>" . $testo . "</h2>";

        } else {
            $tag = "<h2>Inserisci una parola</h2>";
        }
        
    ?>



    <form method="GET" action="index.php">

        <div class="form-group">
            <label for="parola">Parola da verificare</label>
            <input type="text" name="parola" id="parola" autocomplete="off"/>
        </div>

        <button type="submit">Invia</button>
        <button type="reset">Resetta</button>

    </form>

    <?php 
        echo $tag;
    ?>

</body>
</html>