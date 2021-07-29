<?php
include('elecar.php');
include('floor.php');

$floor_stat = new Floor_Req(4, TRUE, TRUE);
$ele_stat = new elecar(2, $floor_stat->curr_floor, TRUE, FALSE);

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