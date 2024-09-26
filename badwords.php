<?php 
    $phrase = $_GET["phrase"];
    $word = $_GET["word"];
    $newPhrase = str_replace($word, 'bobba', $phrase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Maramedwords</title>
</head>
<body>
    <p>La frase inviata è la seguente: <?php echo $phrase; ?></p>
    <p>La sua lunghezza è di: <?php echo strlen($phrase)?> caratteri.</p>

    <p>La frase censurata è la seguente: <?php echo $newPhrase?></p>
    
</body>
</html>