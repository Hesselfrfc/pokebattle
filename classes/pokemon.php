<?php

class pokemon{
    public $name;
    public $EnergyType;
    public $hitpoints;
    public $attack;
    public $weakness;
    public $resistance;


    public function __construct($name, $EnergyType, $hitpoints, $attack, $weakness, $resistance){
        $this->name = $name;
        $this->EnergyType = $EnergyType;
        $this->hitpoints = $hitpoints;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function __toString() {
        return json_encode($this);
    }

    public function test($target){
        $attackName = $this->attack->name;
        $targetAttackName = $target->attack->name;

        $pokemonName = $this->getPokemonName();
        $targetPokemonName = $target->getPokemonName();

        if($target->getEnergyTypeName()== $this->getEnergyTypeName()){
            echo "types zijn gelijk";
        }else {
            echo $attackName . "</br>";
            echo $targetAttackName . "</br>";
            echo $pokemonName . "</br>";
            echo $targetPokemonName . "</br>";
            echo $pokemonName . " valt " . $targetPokemonName . " aan met ". $attackName;
        }
    }

    public function getEnergyTypeName(){
        return $this->EnergyType->name;
    }

    public function getPokemonName()
    {
        return $this->name;
    }
}


?>
