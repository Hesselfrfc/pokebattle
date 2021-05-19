<?

class Weakness{
    public $EnergyType;
    public $multiplier;

    public function __construct($EnergyType, $multiplier){
        $this->EnergyType = $EnergyType;
        $this->multiplier = $multiplier;
    }

    public function getWeaknessName(){
        return $this->EnergyType;
    }

    public function getWeaknessMultiplier(){
        return $this->multiplier;
    }
}