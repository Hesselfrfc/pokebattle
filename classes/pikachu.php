<?

class pikachu extends pokemon {
    
    public function __construct($name){
        $energyType = new EnergyType('Lightning');
        $hitpoints = 60;
        // $attack = new attack('Electric Ring', 50);
        $attack = array(
            'Electric Ring' => new attack('Electric Ring', 80) , 
            'Pika Punch' => new attack('Pika Punch', 20)
        );
        $weakness = new weakness('Fire', 1.5);
        $resistance = new resistance('Fighting', 20);

        parent::__construct($name, $energyType, $hitpoints, $attack, $weakness, $resistance);
    }
}