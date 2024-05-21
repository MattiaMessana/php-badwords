<?php
    //creiamo le variabili 
    $txt = $_GET["text"];
    $word = $_GET["word"];
    $txt_censored = str_ireplace("$word", "***", "$txt",);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <h2>Questo è il testo inserito</h2>
        <p>lunghezza testo: <?php echo strlen($txt); ?> caratteri</p>
        <p><?php echo $txt; ?></p>
    </section>

    <section>
        <h2>Questo è il testo con la parola censurata</h2>
        <p>lunghezza testo: <?php echo strlen($txt_censored); ?> caratteri</p>
        <p><?php echo $txt_censored; ?></p>
    </section>

    <button><a href="./index.php">GO BACK</a></button>

</body>
</html>