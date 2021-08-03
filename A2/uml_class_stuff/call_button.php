<?php

require_once('classes.php');

	
class CallButton extends Node{
    private $currentFloor; //any INT

    public function __construct ($floor){
		//error checking here
        $this->currentFloor = $floor;
		if($floor < 1) throw new Exception('This must be on a numbered floor');
    }
	
	public function Call($elevator){
		try{
			$elevator->Move($this->currentFloor);
			echo "Call to floor {$this->currentFloor} successful!";
		} catch (Exception $e){
			echo $e->getMessage();
		}
	}
	
	public function Get_current_floor(){
		return $this->currentFloor;
	}
	
	public function Display(){
		echo "</br>";
		echo "<h5>CallButton</h5>";
		echo "<h6>Current Floor: {$this->currentFloor}<h6>";
		echo "</br>";
	}
}
?>