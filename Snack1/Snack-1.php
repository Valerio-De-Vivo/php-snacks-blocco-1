<?php 
    $matches = [
        [
            "sc" => 'Juventus',
            "so" => 'Lazio',
            "pc" => 2,
            "po" => 3
        ],
        [
            "sc" => 'Inter',
            "so" => 'Roma',
            "pc" => 3,
            "po" => 1
        ],
        [
            "sc" => 'Atalanta',
            "so" => 'Milan',
            "pc" => 4,
            "po" => 4
        ],
        [
            "sc" => 'Sassuolo',
            "so" => 'Spal',
            "pc" => 0,
            "po" => 1
        ],
        [
            "sc" => 'Crotone',
            "so" => 'Fiorentina',
            "pc" => 1,
            "po" => 1
        ],
        [
            "sc" => 'Verona',
            "so" => 'Potenza',
            "pc" => 0,
            "po" => 2
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
        for ($i = 0; $i < count($matches); $i++) { ?>
            
            <div class="matches">
                <div class="squadre">
                <h2> <span>casa:</span> <?php echo $matches[$i]["sc"] ?></h2>
                -
                <h2> <span>ospite:</span> <?php echo $matches[$i]["so"] ?> </h2>
                </div>
                <div class="punti">
                    <h2><?php echo $matches[$i]["pc"] ?> </h2>
                    -
                    <h2><?php echo $matches[$i]["po"] ?> </h2>
                </div>
            </div>
       <?php } ?> 


</body>
</html>