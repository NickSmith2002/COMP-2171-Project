<?php

class RoomModel extends DB{
    public function getRoom($roomNumber){
        $stmt = $this->connect()->prepare("SELECT * FROM Rooms WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function changeResident1($roomNumber, $newResident){
        $stmt = $this->connect()->prepare("UPDATE Rooms SET `Resident ID #1` = $newResident WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();
        $stmt = $this->connect()->prepare("UPDATE Residents SET `Room Number` = '$roomNumber' WHERE `Resident ID` = $newResident");
        $stmt->execute();
    }

    public function changeResident2($roomNumber, $newResident){
        $stmt = $this->connect()->prepare("UPDATE Rooms SET `Resident ID #2` = $newResident WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();
        $stmt = $this->connect()->prepare("UPDATE Residents SET `Room Number` = '$roomNumber' WHERE `Resident ID` = $newResident");
        $stmt->execute();
    }

    public function deleteResident1($roomNumber){
        $stmt = $this->connect()->prepare("SELECT * FROM Rooms WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $resident = $result[0]['Resident ID #1'];

        $stmt = $this->connect()->prepare("UPDATE Rooms SET `Resident ID #1` = '' WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();
        $stmt = $this->connect()->prepare("UPDATE Residents SET `Room Number` = '' WHERE `Resident ID` = $resident");
        $stmt->execute();
    }

    public function deleteResident2($roomNumber){
        $stmt = $this->connect()->prepare("SELECT * FROM Rooms WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $resident = $result[0]['Resident ID #2'];

        $stmt = $this->connect()->prepare("UPDATE Rooms SET `Resident ID #2` = '' WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();
        $stmt = $this->connect()->prepare("UPDATE Residents SET `Room Number` = '' WHERE `Resident ID` = $resident");
        $stmt->execute();
    }

    public function changeRoomStatus($roomNumber, $newStatus){
        $stmt = $this->connect()->prepare("UPDATE Rooms SET `Availability Status` = '$newStatus' WHERE `Room Number` = '$roomNumber'");
        $stmt->execute();
    }

    public function getAllRooms(){
        $stmt = $this->connect()->prepare("SELECT * FROM Rooms");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
