<?php

class elecar {
    public $curr_floor; //any INT
    public $dest_floor; //any INT
    public $closed; //1=CLOSED, 0=OPEN
    public $moving; //1=MOVING, 0=IDLE

    public function __construct ($currfloor, $destfloor, $closed, $moving){
        $this->curr_floor = $currfloor;
        $this->dest_floor = $destfloor;
        $this->closed = $closed;
        $this->moving = $moving;
    }

    function move_up() {
        $this->moving = TRUE;
        $this->closed = TRUE;
        $this->curr_floor++;
    }

    function move_down() {
        $this->moving = TRUE;
        $this->closed = TRUE;
        $this->curr_floor--;
    }

    function open(){
        $this->moving = FALSE; 
        $this->closed = FALSE;
    }
}

?>
