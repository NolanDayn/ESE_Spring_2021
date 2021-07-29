<?php

class elecar {
    public $curr_floor;
    public $dest_floor;
    public $closed;
    public $moving;

    public function __construct ($currfloor, $destfloor, $closed, $moving){
        $this->curr_floor = $currfloor;
        $this->dest_floor = $destfloor;
        $this->closed = $closed;
        $this->moving = $moving;
    }

    function move_up() {
        $this->moving = 1;
        $this->closed = 1;
        $this->curr_floor++;
    }

    function move_down() {
        $this->moving = 1;
        $this->closed = 1;
        $this->curr_floor--;
    }

    function open(){
        $this->moving = 0; 
        $this->closed = 0;
    }
}

?>
