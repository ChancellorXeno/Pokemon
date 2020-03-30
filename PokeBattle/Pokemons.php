<?
	require 'Pikachu.php';

class Pokemon {

	public static $pokemon = [];

	public $name;
	public $energytype;
	public $hitpoints;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance) {
        $this->name = $name;
        $this->energytype = $energytype;
		$this->hitpoints = $hitpoints;
		$this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

	function setName($newName) {
		$this->$name = newName;
	}

	function GetName() {
		return $this->name;
	}
	function GetHitpoints() {
		$this->hitpoints;
	}
	function GetAttackPower($attackNumber){
		$attack = $this->attacks[$attackNumber];
	}
	function Attack($targetPokemon, $attackNumber) {
		$attack = $this->attacks[$attackNumber];
		$power - $attack->GetAttackPower();

		$targetHealth = $targetPokemon->GetHealth();
		$targetPokemon->SetHealth($targetHealth - $power);
	}


	public function __toString() {
        return json_encode($this);
	}
}

?>