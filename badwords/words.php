<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
$censored_paragraph = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Paragrafo Originale</h2>
    <p><?php echo $paragraph?></p>
    <em>La lunghezza del paragrafo era <strong><?= strlen($paragraph)?></strong> caratteri</em>
    <hr>
    <h2>Paragrafo Censurato</h2>
    <p><?php echo $censored_paragraph?></p>
    <em>La lunghezza del paragrafo censurato è <strong><?= strlen($censored_paragraph)?></strong> caratteri</em>
</body>
</html>