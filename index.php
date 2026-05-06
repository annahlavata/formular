<!DOCTYPE html>
<head>
    <title>Kvíz</title>
</head>
<body>

<?php
$body = 0;

if (isset($_GET["otazka1"])) {

    if ($_GET["otazka1"] == "Praha") {
        $body++;
    }

    if ($_GET["otazka2"] == "8") {
        $body++;
    }

    if ($_GET["otazka3"] == "modrá") {
        $body++;
    }

    echo "<h1>Máš " . $body . " správné odpovědi ze 3</h1>";

    if ($body == 3) {
        echo "<p>Jsi génius</p>";
        echo "<img src='obrazek1.jpg'>";
    }
    else if ($body == 2) {
        echo "<p>Jde to</p>";
        echo "<img src='obrazek2.jpg'>";
    }
    else {
        echo "<p>Zkus to znovu</p>";
        echo "<img src='obrazek3.jpg'>";
    }
}
else {
    echo "<h1>Kvíz</h1>";
}
?>

<form>

    <label>1) Hlavní město ČR:</label>
    <input type="text" name="otazka1">

    <br>

    <label>2) Kolik je 5 + 3:</label>
    <input type="text" name="otazka2">

    <br>

    <label>3) Jaká je barva oblohy:</label>
    <input type="text" name="otazka3">

    <br>

    <button>Odeslat</button>

</form>

</body>
</html>