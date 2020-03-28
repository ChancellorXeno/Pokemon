<?
require Pokemons.php;
require Moves.php

$charmeleon = new Pokemon('Charcoal Melon', 'Fire', 80, [new Move('Head Butt', 10, 'Normal'), new Move('Flare', 30, 'Fire')], ['Water', 2] ['Fighting', 20]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PokeBattle</title>
</head>
<body>
    <p><?= $pikachu->GetName(); ?></p>
    <p><?= $pikachu->GetHitpoints(); ?></p>
    <p><?= $pikachu->GetAttackPower(); ?></p>
</body>
</html>
