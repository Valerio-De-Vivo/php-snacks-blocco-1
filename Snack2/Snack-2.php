<?php 
    $nome = $_GET["nome"];
    $mail = $_GET["mail"];
    $eta = $_GET["eta"];
    $mess = '';
    $err = '';

    if (strlen($nome) > 3 && (strpos($mail , '@')) && (strpos($mail , '.')) && is_numeric($eta) ) {
        $mess = 'Accesso riuscito';
    } else {
        $mess = 'Accesso negato';
        if (strlen($nome) < 3) {
            $err = 'controlla la lunghezza del nome';
        } elseif (!strpos($mail , '@') || !strpos($mail , '.')) {
            $err = 'controlla la mail';
        } elseif (!is_numeric($eta)) {
            $err = 'eta non è un numero';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h2>
            <?php 
                echo $mess;
            ?>
        </h2>
        <h4>
            <?php 
                echo $err;
            ?>
        </h4>
    </div>
    
</body>
</html>