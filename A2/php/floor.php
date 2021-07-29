<?php

class floor {
    public $curr_floor;
    public $direction;
    public $closed;

    public function __construct($currfloor, $dir, $closed) {
        $this->curr_floor = $currfloor;
        $this->direction = $dir;
        $this->closed = $closed;
    } 
    function doors_open($closed){
        $this->$closed = 0;
    }

    function doors_close($closed){
        $this->closed = 1;
    }
}

?>