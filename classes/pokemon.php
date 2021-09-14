<?php

class pokemon{
    static $pokemonAmount;
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
        $this::$pokemonAmount++;
    }

    public function __toString() {
        return json_encode($this);
    }

    public function test($target, $attack){
        $attackName = $attack->getAttackName();
        $targetAttackName = $attack->getAttackName();

        $energyTypeName = $this->getEnergyTypeName();
        $targetEnergyTypeName = $target->getEnergyTypeName();

        $weaknessTypeName = $this->getWeaknessTypeName();
        $targetWeaknessTypeName = $target->getWeaknessTypeName();

        $resistanceTypeName = $this->getResistanceTypeName();
        $targetResistanceTypeName = $target->getResistanceTypeName();

        $pokemonName = $this->getPokemonName();
        $targetPokemonName = $target->getPokemonName();

        if($energyTypeName == $targetWeaknessTypeName){
            $damage = $attack->getAttackDamage() * $target->weakness->multiplier;
            echo $pokemonName . " valt " . $targetPokemonName . " aan met " . $attackName . "<br/>";
            echo "Deze aanval doet " . $damage . " damage "  . "<br/>";
            echo "Aanval heeft erg veel effect" . "<br/>";

            if($damage >=  $target->hitpoints){
                $hpLeft = $target->hitpoints - $damage;
                echo $targetPokemonName . " heeft " .  $hpLeft . " HP over" . "<br/>";
                echo $targetPokemonName . " has fainted!";
                self::$pokemonAmount--;
            }else{
                $hpLeft = $target->hitpoints - $damage;
                echo $targetPokemonName . " heeft " .  $hpLeft . " HP over" . "<br/>";
            }
        }elseif($targetResistanceTypeName === $energyTypeName){
            $damage = $attack->getAttackDamage() - $target->resistance->value;
            echo $pokemonName . " valt " . $targetPokemonName . " aan met " . $attackName . "<br/>";
            echo "Deze aanval doet " . $damage . " damage "  . "<br/>";
            echo "Aanval heeft weinig effect" . "<br/>";

            if($damage >=  $target->hitpoints){
                $hpLeft = $target->hitpoints - $damage;
                echo $targetPokemonName . " heeft " .  "0" . " HP over" . "<br/>";
                echo $targetPokemonName . " has fainted!";
                self::$pokemonAmount--;
            }else{
                $hpLeft = $target->hitpoints - $damage;
                echo $targetPokemonName . " heeft " .  $hpLeft . " HP over" . "<br/>";
            }
        }else {
            echo $pokemonName . " valt " . $targetPokemonName . " aan met ". $attackName;

            if($damage >=  $target->hitpoints){
                $hpLeft = $target->hitpoints - $damage;
                echo $targetPokemonName . " heeft " .  $hpLeft . " HP over" . "<br/>";
                echo $targetPokemonName . " has fainted!";
                self::$pokemonAmount--;
            }else{
                $hpLeft = $target->hitpoints - $damage;
                echo $targetPokemonName . " heeft " .  $hpLeft . " HP over" . "<br/>";
            }
        }
    }

    public static function getPopulation(){
        return self::$pokemonAmount;
    }

    public function getEnergyTypeName(){
        return $this->EnergyType->name;
    }

    public function getWeaknessTypeName(){
        return $this->weakness->EnergyType;
    }

    public function getResistanceTypeName(){
        return $this->resistance->name;
    }

    public function getPokemonName()
    {
        return $this->name;
    }
}


?>
