<?

class Move {
    public $name;
    public $power;
    public $type;

    public function __construct($name, $type, $power) {
        $this->name = $name;
        $this->power = $power;
        $this->type = $type;
    }

    public function __toString() {
        return json_encode($this);
    }
}