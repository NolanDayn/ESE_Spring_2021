<?php
include('elecar.php');
include('floor_req.php');

function checkit($eledest, $floor) {
    if (($eledest > 3 || $floor > 3) || ($eledest < 1 || $floor < 1)) {
        throw new Exception("There cant be more than 3 floors");
    }
    return true;
}

$floor_stat = new Floor_Req($_POST["floor"], $_POST["dir"], TRUE);
$ele_stat = new elecar($_POST["elefloor"], $floor_stat->curr_floor, TRUE, FALSE);

checkit($floor_stat->curr_floor, $ele_stat->dest_floor);

while ($ele_stat->curr_floor != $ele_stat->dest_floor) {

    if ($ele_stat->curr_floor < $ele_stat->dest_floor) {
        $ele_stat->move_up();
        echo "moving up ";
    }

    elseif ($ele_stat->curr_floor > $ele_stat->dest_floor){
        $ele_stat->move_down();
        echo "moving down ";
    }
}

//while is broken, so elevator is at the floor it was called to
$ele_stat->open();
echo "elevator open! ";
$floor_stat->doors_open();
echo "floor doors open!";


?>