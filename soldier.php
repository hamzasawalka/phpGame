<?php

class Soldier {
    
    public $name=null ;
    public $attack;
    public $defense;
    public $speed;
    public $battleCount = 1;

    function __construct($att, $def, $speed, $name) {
        $this->name = $name;
        $this->attack = $att;
        $this->defense = $def;
        $this->speed = $speed;
    }
}

class Legionnaire extends Soldier {
    
    function __construct() {
        Parent::__construct(70,35,6,'Legionnaire');  
    }
}

class Praetorian extends Soldier {

    function __construct() {
        Parent::__construct(30,65,5,'Praetorian'); 
    }
}

class Imperian extends Soldier {

    function __construct() {
        Parent::__construct(30,40,7,'Imperian'); 
    }  
}

class Hero extends Soldier {

    public function __construct($type) {
        $this->name = 'Mega' . $type;
        $baseStats = new $type;
        $this->attack = $baseStats->attack * 2;
        $this->defense = $baseStats->defense * 2;
        $this->speed = $baseStats->speed * 2;
    }
}

class Army {

    public $units = array(
        'Legionnaire' => array(),
        'Praetorian' => array(),
        'Imperian' => array(),
        'Heroes' => array()
    );

    public function addHero($type) {
        array_push($this->units['Heroes'], new Hero($type));
    }

    public function add($type, $num) {
        for($i = 0; $i < $num; $i++) {
            array_push($this->units[$type], new $type);
        }
    }

    public function __construct() {

    }
}

class Player {

    public function __construct($name) {
        $this->name = $name;
    }

    public $name = '';
    public $army = null;

    public function fight($enemy) {
        $enemyDef = 0;
        foreach($enemy->army->units as $key => $val) {
            foreach($val as $k => $value) {
                $value->battleCount += 0.01;
                if(isset($value->defense)) {
                    var_dump($value->attack);
                    $enemyDef += $value->defense;
                    $value->attack *= $value->battleCount;
                    $value->defense *= $value->battleCount;
                }

            }
        }
        if($enemyDef > $this->myAttack()) {
            echo 'Battle Lost <br>' ;
        } else {
            echo 'Battle Won <br>';
        }
    }

    public function myAttack() {
        $att = 0;
        foreach($this->army->units as $key => $value) {
            foreach($value as $k => $val){
                $val->battleCount += 1;
                if(isset($val->attack)) {
                    $att += $val->attack;
                    // $val->attack *= $val->battleCount;
                }
            }
        }
        return $att;
    }
}