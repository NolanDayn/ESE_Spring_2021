<?php

class Floor_Req {
    public $curr_floor; //any int
    public $direction; //1=UP, 0=DOWN
    public $closed; //1=CLOSED, 0=OPEN

    public function __construct($currfloor, $dir, $closed) {
        $this->curr_floor = $currfloor;
        $this->direction = $dir;
        $this->closed = $closed;
    } 
    function doors_open(){
        $this->closed = FALSE;
    }

    function doors_close(){
        $this->closed = TRUE;
    }
}

?>