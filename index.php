<?php
    $text = 'gigino gigetto che vola sul tetto, porco pio e morto gigino';
    $censorWord = $_GET['porco'];
    $censorText = str_replace($censorWord , '*****', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span><?= $text; ?></span>
    <h1>Lunghezza =  <?= strlen($text); ?></h1>
    <span><?= $censorText; ?></span>
    <h1>Lunghezza censura =  <?= strlen($censorText); ?></h1>
</body>
</html>