<?

class Pikachu extends Pokemon {
    // inheritance
    public function __construct() {
        $this->name = 'Electric rat';
        $this->energytype = 'Electric';
	    $this->hitpoints = '60';
	    $this->health = $this->hitpoints;
        $this->attack = [ new Move('Electric Ring',50, 'Electric'), new Move('Pika-Punch', 20 , 'Electric')];
        $this->weakness = ['Fire', 1.5];
        $this->resistance = ['Fighting', 20];
        self::$pokemons[] = $this;
    }
}

$pikachu = new Pikachu();

?>