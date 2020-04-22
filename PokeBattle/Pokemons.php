<?

class Pokemon {

	public static $pokemon = [];

	public $name;
	public $energytype;
	public $hitpoints;
	public $health;
	public $attack;
	public $weakness;
	public $resistance;

	public function __construct($name, $energytype, $hitpoints, $attack, $weakness, $resistance) {
        $this->name = $name;
        $this->energytype = $energytype;
		$this->hitpoints = $hitpoints;
		$this->health = $hitpoints;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

	function GetName() {
		return $this->name;
	}
	function GetType() {
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


	// function Attack($target, $attackNumber) {
	// 	$damage = $this->attack[$attackNumber];
	// 	$power = $damage->GetAttackPower();

	// 	$targetHealth = $target->GetHealth();
	// 	$target->SetHealth($targetHealth - $power);
	// }


	public function __toString() {
        return json_encode($this);
	}
}

?>