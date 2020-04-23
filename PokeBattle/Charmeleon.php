<?

class Charmeleon extends Pokemon {
    // inheritance
    public function __construct() {
        $this->name = 'Some well thought out name';
        $this->energytype = 'Fire';
	    $this->hitpoints = 80;
	    $this->health = $this->hitpoints;
        $this->attack = [new Move('Head Butt', 10, 'Normal'), new Move('Flare', 30, 'Fire')];
        $this->weakness = ['Water', 2];
        $this->resistance = ['Fighting', 20];
        self::$pokemons[] = $this;
    }

}

$charmeleon = new Charmeleon();

?>