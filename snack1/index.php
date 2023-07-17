<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calendario partite di basket</h1>

<?php
$partite = [
    [
        "squadra_casa" => "Squadra1",
        "squadra_ospite" => "Squadra2",
        "punti_casa" => 55,
        "punti_ospite" => 60
    ],
    [
        "squadra_casa" => "Squadra3",
        "squadra_ospite" => "Squadra4",
        "punti_casa" => 70,
        "punti_ospite" => 65
    ],
    [
        "squadra_casa" => "Squadra5",
        "squadra_ospite" => "Squadra6",
        "punti_casa" => 80,
        "punti_ospite" => 75
    ]

];

foreach ($partite as $partita) {
    $squadra_casa = $partita["squadra_casa"];
    $squadra_ospite = $partita["squadra_ospite"];
    $punti_casa = $partita["punti_casa"];
    $punti_ospite = $partita["punti_ospite"];

    echo "<div>";
    echo $squadra_casa . " - " . $squadra_ospite . " | " . $punti_casa . "-" . $punti_ospite;
    echo "</div>";
}
?>
</body>
</html>