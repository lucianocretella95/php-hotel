<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <?php $parking = $_GET["parking"] ?? "NO" ?>
    <?php 
    if ($parking=true) {
        echo $hotels["parking"];
    } else {
    }
    
    
    ?>
<form action="hotels.php" method="GET">
        <input type="text" placeholder="parcheggio: si o no ?" name="testo">
        <button type="submit">Invia</button>
    </form>
</body>
</html>