<?

class Resistance{
    public $name;
    public $value;

    public function __construct($name, $value){
        $this->name = $name;
        $this->value = $value;
    }

    public function getResistanceName(){
        return $this->name;
    }

    public function getResistanceValue(){
        return $this->value;
    }
}