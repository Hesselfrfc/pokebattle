<?

class EnergyType{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getEnergyType(){
        return $this->name;
    }
}