<?php

class floor {
    public $curr_floor;
    public $direction;
    public $closed;

    function doors_open($closed){
        $this->$closed = false;
    }

    function doors_close($closed){
        $this->closed = true;
    }
}

?>