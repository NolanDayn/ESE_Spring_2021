<?php
require_once('classes.php');
	
class Elevator extends Node{
    private $curr_floor; //any INT
    private $closed; //1=CLOSED, 0=OPEN
    private $moving; //1=MOVING, 0=IDLE
	private $num_floors; //any INT > 0

    public function __construct ($num_floors){
		//error checking here
        $this->curr_floor = 1;
        $this->dest_floor = 0;
        $this->closed = TRUE;
        $this->moving = FALSE;
		if($num_floors < 1) throw new Exception('There must be at least 1 floor');
		$this->num_floors = $num_floors;
		
    }

    function move_up() {
		if($this->curr_floor >= $this->num_floors) Throw new Exception('Already at the top floor');
        $this->moving = TRUE;
        $this->closed = TRUE;
        $this->curr_floor++;
    }

    function move_down() {
		if($this->curr_floor <= 1) Throw new Exception('Already at the top bottom');
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
	
	public function Move($dest_floor){
		if($dest_floor > $this->num_floors || $dest_floor <= 0) Throw new Exception('Destination Out of range');
		$this->close();
		while($dest_floor > $this->curr_floor) $this->move_up();
		while($dest_floor < $this->curr_floor) $this->move_down();
		$this->open();
	}
	
	public function Get_current_floor(){
		return $this->curr_floor;
	}
	
	public function Set_current_floor($val){
		if($val <= 1 || $val > $this->num_floors) Throw new Exception('This floor is out of range');
		$this->curr_floor = $val;
	}
	
	public function Display(){
		echo "</br>";
		echo "<h5>Elevator {$this->num_floors}</h5>";
		echo "<h6>Current Floor: {$this->curr_floor}<h6>";
		echo "<h6>Destination Floor: {$this->dest_floor}<h6>";
		echo "<h6>Closed: {$this->closed}<h6>";
		echo "<h6>Moving: {$this->moving}<h6>";
		echo "</br>";
	}
}
?>