<?php

class ResidentController {

    private $model;

    function __construct()
    {
        $this->model = new ResidentModel();
    }

    public function findResidentByID($id) {
        return $this->model->getResidentById($id);
    }

    public function findResidentByName($name) {
        return $this->model->getResidentsByName($name);
    }

    public function findResidentByEmail($email) {
        return $this->model->getResidentByEmail($email);
    }

    public function findAllResidents() {
        return $this->model->getAllResidents();
    }

    public function changeResidentRoom($newRoomNumber, $residentID){
        return $this->model->changeRoom($newRoomNumber, $residentID);
    }

    public function removeResident($id){
        return $this->model->deleteResident($id);
    }

    public function changeResident($id,$data){
        if(!empty($this->findResidentbyID($id))){
            echo "Resident successfully updated";
            return $this->model->updateResident($id,$data);
        }
        else{
            echo "Update failed.No resident found/invalid ID type";
        }
    }
       

    public function addNewResident($firstName, $lastName, $middleInitial, $residentID, $position, $DOB, $nationality, 
                                   $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
                                   $emailAddress, $idNumber, $contactName, $contactRelationship, 
                                   $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
                                   $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
                                   $roomNumber)
    {
        $this->model->addResident($firstName, $lastName, $middleInitial, $residentID, $position, $DOB, $nationality, 
        $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
        $emailAddress, $idNumber, $contactName, $contactRelationship, 
        $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
        $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
        $roomNumber);
    }
}