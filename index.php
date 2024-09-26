<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords Index</title>
</head>
<body>
    <form action="badwords.php" method="GET">
        <label for="phrase">Frase</label>
        <input type="text" name="phrase">
        <label for="word">Parola da censurare</label>
        <input type="text" name="word">

        <button type="submit">Ottieni il risultato</button>
    </form>
</body>
</html>

<style>
    input, button {
        padding:15px;
    }
</style>