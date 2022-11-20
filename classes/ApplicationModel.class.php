<?php

class ApplicationModel extends DB {
    
    public function getApplication($applicationID) {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants WHERE ApplicationID = :id");
        $stmt->bindValue(':id', $applicationID, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllApplications() {
        $stmt = $this->connect()->prepare("SELECT * FROM Applicants");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function changeStatus($newStatus, $applicationID) {
        $stmt = $this->connect()->prepare("UPDATE Applicants SET Status = $newStatus WHERE ApplicationID = $applicationID;");
        $stmt->execute();
    }

    public function addApplication($firstName, $lastName, $middleInitial, $DOB, $nationality, 
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

    public function deleteApplication($applicationID) {
        $stmt = $this->connect()->prepare("DELETE FROM Applicants WHERE ApplicationID = $applicationID;");
        $stmt->execute();
    }
    
}