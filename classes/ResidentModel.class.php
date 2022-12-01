<?php

class ResidentModel extends DB {

    protected function getResidentById($id) {
        $stmt = $this->connect()->prepare("SELECT * FROM Residents WHERE `Resident ID` = :id OR `ID Number` = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getResidentsByName($name) {
        //Note that this retrieves can multiple residents
        $name = explode(' ', $name); //Splits string into array by spaces

        //If entered only first name or only last name
        if(count($name) == 1) {
            $stmt = $this->connect()->prepare("SELECT * FROM Residents WHERE First Name LIKE :name OR Last Name LIKE :name");
            $stmt->bindValue(':name', "$name[0]%", PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        //If entered first name and last name
        if(count($name) > 1) {
            $stmt = $this->connect()->prepare("SELECT * FROM Residents WHERE First Name LIKE :firstname AND Last Name LIKE :lastname");
            $stmt->bindValue(':firstname', "$name[0]%", PDO::PARAM_STR);
            $stmt->bindValue(':lastname', "$name[1]%", PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    protected function getResidentByEmail($email) {
        $stmt = $this->connect()->prepare("SELECT * FROM Residents WHERE Email Address = :email");
        $stmt->bindValue(':id', $email, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getAllResidents() {
        $stmt = $this->connect()->prepare("SELECT * FROM Residents");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getResidentsColumns($columns){
        $stmt = $this->connect()->prepare("SELECT $columns FROM Residents");
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getResidentTable_present(){
        $stmt = $this->connect()->prepare("SELECT `Resident ID`,Position,`First Name`, `Last Name`, `Middle Initial`,Gender, `Phone Number`, `Email Address`, `Room Number` FROM Residents");
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getResidentAdvisorTable_present(){
        $stmt = $this->connect()->prepare("SELECT `Resident ID`,Position,`First Name`, `Last Name`, `Middle Initial`,Gender, `Phone Number`, `Email Address`, `Room Number` FROM Residents WHERE Position = \"Resident Advisor\"");
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    protected function getBlockRepTable_present(){
        $stmt = $this->connect()->prepare("SELECT `Resident ID`,Position,`First Name`, `Last Name`, `Middle Initial`,Gender, `Phone Number`, `Email Address`, `Room Number` FROM Residents WHERE Position = \"Block Representative\"");
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getStandardResidentTable_present(){
        $stmt = $this->connect()->prepare("SELECT `Resident ID`,Position,`First Name`, `Last Name`, `Middle Initial`,Gender, `Phone Number`, `Email Address`, `Room Number` FROM Residents WHERE Position = \"Resident\"");
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    protected function getBlockResidents($columns, $block){
        $stmt = $this->connect()->prepare("SELECT * FROM Residents INNER JOIN Rooms ON Residents.`Room Number` = Rooms.`Room Number` WHERE Rooms.Block = \"$block\"");
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function changeRoom ($newRoomNumber, $residentID) {
        $stmt = $this->connect()->prepare("UPDATE Residents SET Room Number = $newRoomNumber WHERE `Resident ID` = $residentID;");
        $stmt->execute();
    }

    protected function deleteResident($id) {
        $stmt = $this->connect()->prepare("DELETE FROM Residents WHERE `Resident ID` = $id; DELETE FROM Users WHERE ID = $id;");
        
        $stmt->execute();

    }

    protected function updateResident($id, $data){
        $stmt = $this->connect()->prepare("UPDATE Residents SET $data WHERE `Resident ID` = $id");
        $stmt->execute();
    }



    
    protected function addResident($firstName, $lastName, $middleInitial, $residentID, $position, $DOB, $nationality, 
                                   $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
                                   $emailAddress, $idNumber, $contactName, $contactRelationship, 
                                   $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
                                   $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
                                   $roomNumber)
    {
        $stmt = $this->connect()->prepare("INSERT INTO Residents (First Name, Last Name, Middle Initial, Resident ID, Position, DOB, Nationality, Gender, Maritial Status, Family Type, Home Address, Mailing Address, Email Address, ID Number, Contact Name, Contact Relationship, Contact Telephone, Contact Address, Contact Email, Level of Study, Year of Study, Programme Name, Faculty Name, Name of School, Room Number) 
                VALUES (:firstName, :lastName, :middleInitial, :residentID, :position, :DOB, :nationality, :gender, :maritialStatus, :familyType, :homeAddress, :mailingAddress, :emailAddress, :idNumber, :contactName, :contactRelationship, :contactTelephone, :contactAddress, :contactEmail, :levelOfStudy, :yearOfStudy, :programmeName, :facultyName, :nameOfSchool, :roomNumber)");
        
        $stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindValue(':middleInitial', $middleInitial, PDO::PARAM_STR);
        $stmt->bindValue(':residentID', $residentID, PDO::PARAM_STR);
        $stmt->bindValue(':position', $position, PDO::PARAM_STR);
        $stmt->bindValue(':DOB', $DOB, PDO::PARAM_STR);
        $stmt->bindValue(':nationality', $nationality, PDO::PARAM_STR);
        $stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindValue(':maritialStatus', $maritialStatus, PDO::PARAM_STR);
        $stmt->bindValue(':familyType', $familyType, PDO::PARAM_STR);
        $stmt->bindValue(':homeAddress', $homeAddress, PDO::PARAM_STR);
        $stmt->bindValue(':mailingAddress', $mailingAddress, PDO::PARAM_STR);
        $stmt->bindValue(':emailAddress', $emailAddress, PDO::PARAM_STR);
        $stmt->bindValue(':idNumber', $idNumber, PDO::PARAM_STR);
        $stmt->bindValue(':contactName', $contactName, PDO::PARAM_STR);
        $stmt->bindValue(':contactRelationship', $contactRelationship, PDO::PARAM_STR);
        $stmt->bindValue(':contactTelephone', $contactTelephone, PDO::PARAM_STR);
        $stmt->bindValue(':contactAddress', $contactAddress, PDO::PARAM_STR);
        $stmt->bindValue(':contactEmail', $contactEmail, PDO::PARAM_STR);
        $stmt->bindValue(':levelOfStudy', $levelOfStudy, PDO::PARAM_STR);
        $stmt->bindValue(':yearOfStudy', $yearOfStudy, PDO::PARAM_STR);
        $stmt->bindValue(':programmeName', $programmeName, PDO::PARAM_STR);
        $stmt->bindValue(':facultyName', $facultyName, PDO::PARAM_STR);
        $stmt->bindValue(':nameOfSchool', $nameOfSchool, PDO::PARAM_STR);
        $stmt->bindValue(':roomNumber', $roomNumber, PDO::PARAM_STR);

        $stmt->execute();
    }

}