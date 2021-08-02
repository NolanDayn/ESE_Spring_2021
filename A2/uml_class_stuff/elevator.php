<?php
	include('node.php');
	
class Elevator extends Node{
    private $curr_floor; //any INT
    private $dest_floor; //any INT
    private $closed; //1=CLOSED, 0=OPEN
    private $moving; //1=MOVING, 0=IDLE

    public function __construct ($currfloor, $destfloor, $closed, $moving){
		//error checking here
        $this->curr_floor = $currfloor;
        $this->dest_floor = $destfloor;
        $this->closed = $closed;
        $this->moving = $moving;
    }

    function move_up() {
		//error checking here
        $this->moving = TRUE;
        $this->closed = TRUE;
        $this->curr_floor++;
    }

    function move_down() {
		//error checking here
        $this->moving = TRUE;
        $this->closed = TRUE;
        $this->curr_floor--;
    }

    function open(){
        $this->moving = FALSE; 
        $this->closed = FALSE;
    }
	
	function close(){
        $this->moving = FALSE; 
        $this->closed = TRUE;
    }
	
	public function setDest($dest_floor){
		//error check here
		$this->dest_floor = $dest_floor;
	}
	
	public function getDest(){
		return $this->dest_floor;
	}
	
	function Display(){
		echo "<p1>Current Floor: Destination Floor: Open: Closed: </p1>"
	}
}
?>