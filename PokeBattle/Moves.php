<?

class Move {

    protected $name;
    protected $power;
    protected $type;

    public function __construct($name, $power, $type) {
        $this->name = $name;
        $this->power = $power;
        $this->type = $type;
    }

    public function GetName(){
        return $this->name;
    }
    public function GetPower(){
        return $this->power;
    }
    public function GetType(){
        return $this->type;
    }
    public function __toString() {
        return json_encode($this);
    }
}