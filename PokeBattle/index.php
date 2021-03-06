<?
require 'Pokemons.php';
require 'Moves.php';
require 'Pikachu.php';
require 'Charmeleon.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PokeBattle</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p>Amount of Pokemons: <?= Pokemon::GetPopulation(); ?>
<div class="Pokemon">
    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png">
    <p><?= $pikachu->GetName(); ?></p>
    <p>Energy Type: <?= $pikachu->GetEnergyType(); ?></p>
    <p>HP: <?= $pikachu->GetHealth(); ?></p>
    <p><?= $pikachu->GetAttackName(0); ?>: <?= $pikachu->GetAttackDamage(0); ?></p>
    <p><?= $pikachu->GetAttackName(1); ?>: <?= $pikachu->GetAttackDamage(1); ?></p>
</div>

<div class="Pokemon">
    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png">
    <p><?= $charmeleon->GetName(); ?></p>
    <p>Energy Type: <?= $charmeleon->GetEnergyType(); ?></p>
    <p>HP: <?= $charmeleon->GetHealth(); ?></p>
    <p><?= $charmeleon->GetAttackName(0); ?>: <?= $charmeleon->GetAttackDamage(0); ?></p>
    <p><?= $charmeleon->GetAttackName(1); ?>: <?= $charmeleon->GetAttackDamage(1); ?></p>
</div>
<div class="text">
    <p>Pikachu attacks Charmeleon with Electric Ring. <?= $pikachu->Attack($charmeleon, 0); //inflict on Charmeleon ?></p>
    <p>Charmeleon remaining health: <?= $charmeleon->GetHealth(); ?><p>
    <p>Charmeleon attacks Pikachu with Flare. <?= $charmeleon->Attack($pikachu, 1); //inflict on Charmeleon ?></p>
    <p>Pikachu remaining health: <?= $pikachu->GetHealth(); ?><p>
    <p>Pikachu attacks Charmeleon with Pika-Punch. <?= $pikachu->Attack($charmeleon, 1); //inflict on Charmeleon ?></p>
    <p>Charmeleon remaining health: <?= $charmeleon->GetHealth(); ?><p>
    <p>Charmeleon attacks Pikachu with Flare. <?= $charmeleon->Attack($pikachu, 1); //inflict on Charmeleon ?></p>
    <p>Pikachu remaining health: <?= $pikachu->GetHealth(); ?><p>
    <p>Amount of Pokemons: <?= Pokemon::GetPopulation(); ?>
</div>
</body>
</html>