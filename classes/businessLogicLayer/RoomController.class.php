<?php

class RoomController{

    private $model;

    function __construct()
    {
        $this->model = new RoomModel();
    }

    public function assignResident1($roomNumber, $newResident){
        $this->model->changeResident1($roomNumber, $newResident);
    }

    public function assignResident2($roomNumber, $newResident){
        $this->model->changeResident2($roomNumber, $newResident);
    }

    public function removeResident1($roomNumber){
        $this->model->deleteResident1($roomNumber);
        
    }

    public function removeResident2($roomNumber){
        $this->model->deleteResident2($roomNumber);
    }

    public function changeStatus($roomNumber, $newStatus){
        $this->model->changeRoomStatus($roomNumber, $newStatus);
    }

    public function findRoom($roomNumber){
        return $this->model->getRoom($roomNumber)[0];
    }
}