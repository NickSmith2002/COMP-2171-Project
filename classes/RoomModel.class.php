<?php

class RoomModel extends DB{
    protected function getRoom($roomNumber){
        $stmt = $this->connect()->prepare("SELECT * FROM Rooms WHERE `Room Number` = \'$roomNumber\'");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function changeResident1($roomNumber, $newResident){
        $stmt = $this->connect()->prepare("UPDATE Rooms SET `Resident ID #1` = \'$newResident\' WHERE `Room Number` = \'$roomNumber\'; UPDATE Residents SET `Room Number` = \'$roomNumber\' WHERE `Resident Number` = \'$newResident\'");
        $stmt->execute();
    }

    protected function changeResident2($roomNumber, $newResident){
        $stmt = $this->connect()->prepare("UPDATE Rooms SET `Resident ID #2` = \'$newResident\' WHERE `Room Number` = \'$roomNumber\'; UPDATE Residents SET `Room Number` = \'$roomNumber\' WHERE `Resident Number` = \'$newResident\'");
        $stmt->execute();
    }

    protected function getAllRooms(){
        $stmt = $this->connect()->prepare("SELECT * FROM Rooms");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
