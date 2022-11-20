<?php

    include 'classAutoloader.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $middleInitial = filter_input(INPUT_POST, 'middleInitial', FILTER_SANITIZE_STRING);
        $DOB = filter_input(INPUT_POST, 'DOB', FILTER_SANITIZE_STRING);
        $nationality = filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING);
        $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
        $maritialStatus = filter_input(INPUT_POST, 'maritialStatus', FILTER_SANITIZE_STRING);
        $familyType = filter_input(INPUT_POST, 'familyType', FILTER_SANITIZE_STRING);
        $homeAddress = filter_input(INPUT_POST, 'homeAddress', FILTER_SANITIZE_STRING);
        $mailingAddress = filter_input(INPUT_POST, 'mailingAddress', FILTER_SANITIZE_STRING);
        $emailAddress = filter_input(INPUT_POST, 'emailAddress', FILTER_SANITIZE_STRING);
        $idNumber = filter_input(INPUT_POST, 'idNumber', FILTER_SANITIZE_STRING);
        $contactName = filter_input(INPUT_POST, 'contactName', FILTER_SANITIZE_STRING);
        $contactRelationship = filter_input(INPUT_POST, 'contactRelationship', FILTER_SANITIZE_STRING);
        $contactTelephone = filter_input(INPUT_POST, 'contactTelephone', FILTER_SANITIZE_STRING);
        $contactAddress = filter_input(INPUT_POST, 'contactAddress', FILTER_SANITIZE_STRING);
        $contactEmail = filter_input(INPUT_POST, 'contactEmail', FILTER_SANITIZE_STRING);
        $levelOfStudy = filter_input(INPUT_POST, 'levelOfStudy', FILTER_SANITIZE_STRING);
        $yearOfStudy = filter_input(INPUT_POST, 'yearOfStudy', FILTER_SANITIZE_STRING);
        $programmeName = filter_input(INPUT_POST, 'programmeName', FILTER_SANITIZE_STRING);
        $facultyName = filter_input(INPUT_POST, 'facultyName', FILTER_SANITIZE_STRING);
        $nameOfSchool = filter_input(INPUT_POST, 'nameOfSchool', FILTER_SANITIZE_STRING);
        $roomType = filter_input(INPUT_POST, 'roomType', FILTER_SANITIZE_STRING);
        $roommatePref = filter_input(INPUT_POST, 'roommatePref', FILTER_SANITIZE_STRING);


        try{
            $applicationContr = new ApplicationController();

            $applicationContr->addNewApplication($firstName, $lastName, $middleInitial, $DOB, $nationality, 
                                                 $gender, $maritialStatus, $familyType, $homeAddress, $mailingAddress, 
                                                 $emailAddress, $idNumber, $contactName, $contactRelationship, 
                                                 $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, 
                                                 $yearOfStudy, $programmeName, $facultyName, $nameOfSchool, 
                                                 $roomType, $roommatePref);
            
            echo 1; //Sending this value to javascript to tell page that operation successful
        }
        catch(Exception $e){
            echo 'ERROR HAS OCCURED SUBMITTING APPLICATION: '.$e->getMessage();
        }
    }
    