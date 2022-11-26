<?php

class ApplicationModel extends DB {
    
    protected function getApplication($data) {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants WHERE ApplicationID = :id");
        $stmt->bindValue(':id', $data, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(count($result) == 0){
            $stmt = $this->connect()->prepare("SELECT * FROM Applicants WHERE `First Name` = :name");
            $stmt->bindValue(':name', $data, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) == 0){
                $stmt = $this->connect()->prepare("SELECT * FROM Applicants WHERE `Last Name` = :name");
                $stmt->bindValue(':name', $data, PDO::PARAM_STR);
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

        }
        return $result;
    }

    protected function getAllApplications() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getAcceptedApplications() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants WHERE Status = 'Accepted'");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    protected function getRejectedApplications() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants WHERE Status = 'Rejected'");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getPendingApplications() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants WHERE Status = 'Pending'");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //SORTING FUNCTIONS
    protected function getAllAscendingID() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants ORDER BY ApplicationID ASC");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    protected function getAllDescendingID() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants ORDER BY ApplicationID DESC");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getAllAscendingName() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants ORDER BY `First Name` ASC");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    protected function getAllDescendingName() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants ORDER BY `First Name` DESC");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function changeStatus($newStatus, $applicationID) {
        $stmt = $this->connect()->prepare("UPDATE Applicants SET Status = :status WHERE ApplicationID = :id");
        $stmt->bindValue(':status', $newStatus, PDO::PARAM_STR);
        $stmt->bindValue(':id', $applicationID, PDO::PARAM_STR);

        $stmt->execute();
    }

    protected function addApplication($firstName, $lastName, $middleInitial, $DOB, $nationality, 
                                      $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
                                      $emailAddress, $idNumber, $contactName, $contactRelationship, 
                                      $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
                                      $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
                                      $roomType, $roommatePref) {
        //Add default status of Pending to status
        $stmt = $this->connect()->prepare("INSERT INTO Applicants (Status, First Name, Last Name, Middle Initial, DOB, Nationality, Gender, Maritial Status, Family Type, Home Address, Mailing Address, Email Address, ID Number, Contact Name, Contact Relationship, Contact Telephone, Contact Address, Contact Email, Level of Study, Year of Study, Programme Name, Faculty Name, Name of School, Room Type, Roommate Preference) 
                VALUES (pending, :firstName, :lastName, :middleInitial, :DOB, :nationality, :gender, :maritialStatus, :familyType, :homeAddress, :mailingAddress, :emailAddress, :idNumber, :contactName, :contactRelationship, :contactTelephone, :contactAddress, :contactEmail, :levelOfStudy, :yearOfStudy, :programmeName, :facultyName, :nameOfSchool, :roomType, :roommatePref)");
        
        $stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindValue(':middleInitial', $middleInitial, PDO::PARAM_STR);
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
        $stmt->bindValue(':roomType', $roomType, PDO::PARAM_STR);
        $stmt->bindValue(':roommatePref', $roommatePref, PDO::PARAM_STR);

        $stmt->execute();
    }

    protected function deleteApplication($applicationID) {
        $stmt = $this->connect()->prepare("DELETE FROM Applicants WHERE ApplicationID = $applicationID;");
        $stmt->execute();
    }
    
}