<?php

class ApplicationController extends ApplicationModel {

    public function findApplication($applicationID) {
        $application = $this->getApplication($applicationID);
        return $application;
    }

    public function changeApplicationStatus($newStatus, $applicationID) {
        $this->changeStatus($newStatus, $applicationID);
    }

    public function removeApplication($applicationID) {
        $this->deleteApplication($applicationID);
    }

    public function changeAcceptedToResidents() {
        $this->changeToResidents();
    }

    public function addNewApplication($firstName, $lastName, $middleInitial, $DOB, $nationality, 
        $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
        $emailAddress, $idNumber, $contactName, $contactRelationship, 
        $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
        $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
        $roomType, $roommatePref)
    {
        $this->addApplication(
                                $firstName, $lastName, $middleInitial, $DOB, $nationality, 
                                $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
                                $emailAddress, $idNumber, $contactName, $contactRelationship, 
                                $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
                                $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
                                $roomType, $roommatePref
                            );
    }
}