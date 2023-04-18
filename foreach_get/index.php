<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach get</title>
</head>
<body>

    <?php

        $data = $_GET;

        if (empty($data)) {
            echo "nessun elemento get";
        } else {
            foreach($data as $chiave => $valore) {
                echo 'Chiave: ' . $chiave . ' - Valore ' . $valore . '<br/>';
            }
        }

    ?>
    

    <form method="GET" action="index.php">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" />
        </div>

        <div class="form-group">
            <label for="cognome">Cognome</label>
            <input type="text" name="cognome" id="cognome" />
        </div>

        <div class="form-group">
            <label for="eta">Eta</label>
            <input type="number" name="eta" id="eta" />
        </div>

        <div class="form-group">
            <label for="genere">Genere</label>
            <select id="genere" name="genere">
                <option value="m">Maschio</option>
                <option value="f">Femmina§</option>
                <option value="-">Neutro</option>
            </select>
        </div>

        <button type="submit">Invia</button>
        <button type="reset">Resetta</button>

    </form>


</body>
</html>