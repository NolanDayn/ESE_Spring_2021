<?php

require_once('classes.php');

//1 elevator with 3 floors
$elevator = new Elevator(3);

//floor sensor will sense the elevator on the second floor (see FloorSensor class)
$sensor = new FloorSensor();

//attempt to set the current floor of the elevator to 2
$sensor->SenseFloor($elevator);

//show the result
$elevator->Display();

?>