<?php

class RoomController extends RoomModel{

    public function assignResident1($roomNumber, $newResident){
        $this->changeResident1($roomNumber, $newResident);
    }

    public function assignResident2($roomNumber, $newResident){
        $this->changeResident2($roomNumber, $newResident);
    }

}