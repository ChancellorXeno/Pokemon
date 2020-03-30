<?
require 'Moves.php';
require 'Pokemons.php';

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
    <p>HP: <?= $pikachu->GetHitpoints(); ?></p>
    <p>Electric Ring: <?= $pikachu->GetAttackPower(0); ?></p>
    <p>Non existant move: <?= $pikachu->GetAttackPower(1); ?></p>
</body>
</html>
