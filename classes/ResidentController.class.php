<?php

class ResidentController extends ResidentModel {

    public function findResidentByID($id) {
        return $this->getResidentById($id);
    }

    public function findResidentByName($name) {
        return $this->getResidentsByName($name);
    }

    public function findResidentByEmail($email) {
        return $this->getResidentByEmail($email);
    }

    public function findAllResidents() {
        return $this->getAllResidents();
    }

    public function changeResidentRoom($newRoomNumber, $residentID){
        return $this->changeRoom($newRoomNumber, $residentID);
    }

    public function removeResident($id){
        return $this->deleteResident($id);
    }

    public function addNewResident($firstName, $lastName, $middleInitial, $residentID, $position, $DOB, $nationality, 
                                   $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
                                   $emailAddress, $idNumber, $contactName, $contactRelationship, 
                                   $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
                                   $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
                                   $roomNumber)
    {
        $this->addResident($firstName, $lastName, $middleInitial, $residentID, $position, $DOB, $nationality, 
        $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
        $emailAddress, $idNumber, $contactName, $contactRelationship, 
        $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
        $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
        $roomNumber);
    }
}