<?

class Pokemon {

	protected static $pokemons = [];

	protected $name;
	protected $energytype;
	protected $hitpoints;
	protected $health;
	protected $attack;
	protected $weakness;
	protected $resistance;

	public function __construct($name, $energytype, $hitpoints, $attack, $weakness, $resistance) {
        $this->name = $name;
        $this->energytype = $energytype;
		$this->hitpoints = $hitpoints;
		$this->health = $hitpoints;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
	}
	
	static function GetPopulation() {
		return count(self::$pokemons);
	}

	function GetName() {
		return $this->name;
	}
	function GetEnergyType() {
		return $this->energytype;
	}
	function GetHealth() {
		return $this->health;
	}
	function GetAttackName($attackNumber){
		return $this->attack[$attackNumber]->GetName();
	}
	function GetAttackDamage($attackNumber){
		return $this->attack[$attackNumber]->GetPower();
	}

	function Attack($target, $attackNumber) {
		$target->doDamage($this->energytype, $this->attack[$attackNumber]->GetPower());
	}

	function doDamage($energytype, $damage) {
		$this->health = $this->health - $damage; 

		if ($this->health < 0){
			$this->health = 0;
		}
		if ($this->health == 0){
			$position=-1;
			for ($i = 0; $i < count (self::$pokemons); $i++){
				if (self::$pokemons[$i] == $this){
					$position = $i;
				}
			}
			if ($position > -1 ){
				unset(self::$pokemons[$position]);
			}
		}
	}


	public function __toString() {
        return json_encode($this);
	}
}

?>