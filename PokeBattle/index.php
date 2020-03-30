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
<div class="Pikachu">
    <p><?= $pikachu->GetName(); ?></p>
    <p><?= $pikachu->GetType(); ?></p>
    <p>HP: <?= $pikachu->GetHealth(); ?></p>
    <p><?= $pikachu->GetAttackName(0); ?>: <?= $pikachu->GetAttackPower(0); ?></p>
    <p><?= $pikachu->GetAttackName(1); ?>: <?= $pikachu->GetAttackPower(1); ?></p>
</div>
<div class="Charmeleon">
</div>
</body>
</html>
