<?
require 'Moves.php';

$pikachu = new Pokemon('Electric Rat', 
                       'Electric', 
                       60, 
                       [new Move('Electric Ring', 50, 'Electric'), new Move('Non-existant move', 20 , 'Electric')], 
                       ['Fire', 1.5], 
                       ['Fighting', 20]);

?>