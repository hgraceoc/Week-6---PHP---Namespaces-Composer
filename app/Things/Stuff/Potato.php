<?php

// Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times.

declare(strict_types=1);

namespace App\Things\Stuff;

class Potato 
{
    private $waterlevel = 0;

    public function water()
    {
        $this->waterlevel += 1;
        return $this;

    }

    public function hasGrown()
    { 
       return $this->waterlevel >=5;

    }

}

