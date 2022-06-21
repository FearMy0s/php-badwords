<?php
    $text = 'gigino gigetto che vola sul tetto, porco pio e morto gigino';
    $censorWord = $_GET['censorWord'];
    $censorText = str_replace($censorWord, '*****', $text);
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
    <span>Lunghezza =  <?= strlen($text); ?></span>
    <span><?= $censorText; ?></span>
    <span>Lunghezza censura =  <?= strlen($censorText); ?></span>
</body>
</html>