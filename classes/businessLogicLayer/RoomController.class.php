<?php

class RoomController extends RoomModel{

    public function assignResident1($roomNumber, $newResident){
        $this->changeResident1($roomNumber, $newResident);
    }

    public function assignResident2($roomNumber, $newResident){
        $this->changeResident2($roomNumber, $newResident);
    }

    public function removeResident1($roomNumber){
        $this->deleteResident1($roomNumber);
        
    }

    public function removeResident2($roomNumber){
        $this->deleteResident2($roomNumber);
    }

    public function changeStatus($roomNumber, $newStatus){
        $this->changeRoomStatus($roomNumber, $newStatus);
    }

    public function findRoom($roomNumber){
        return $this->getRoom($roomNumber)[0];
    }
}