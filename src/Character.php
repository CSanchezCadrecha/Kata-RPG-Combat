<?php

namespace App;

use phpDocumentor\Reflection\Types\Boolean;

class Character {

    private int $health;
    private int $level;
    private bool $alive;
    private bool $damage;

    public function __construct()
    {
        $this->health = 1000;
        $this->level = 1;
        $this->alive = true;
        $this->damage = true;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getAlive()
    {
        return $this->alive;
    }

    public function getDamage()
    {
        
        return $this->damage;
    }


    
    
}

?>