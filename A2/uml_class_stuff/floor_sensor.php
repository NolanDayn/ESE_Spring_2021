<?php
require_once('classes.php');
	
class FloorSensor extends Node{
    private $curr_floor; //Volatile Variable that changes through hardware

    public function __construct (){
		$this->curr_floor = 4; //dummy value for testing
    }

    public function SenseFloor($elevator) {
		try {
			$elevator->Set_current_floor($this->curr_floor);
			echo "current floor changed to floor {$elevator->Get_current_floor()} successfully";
		} catch (Exception $e){
			echo "{$e->getMessage()}";
		}
    }
}
?>