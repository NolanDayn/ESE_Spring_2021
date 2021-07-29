<?php

class elecar {
    public $curr_floor;
    public $dest_floor;
    public $direction;
    public $closed;
    public $moving;

    function move_up($moving, $direction, $closed, $curr_floor) {
        $this->moving = true;
        $this->direction = true;
        $this->closed = true;
        $this->curr_floor++;
    }

    function move_down($moving, $direction, $closed, $curr_floor) {
        $this->moving = true;
        $this->direction = false;
        $this->closed = true;
        $this->curr_floor--;
    }

    function open($moving, $closed){
        $this->moving = false; 
        $this->closed = false;
    }
}

?>