<?php

class DB {
    private $host = 'db4free.net';
    private $username = 'swenstar';
    private $password = 'ihatecomsci123';
    private $dbname = 'georgealleyne';

    protected function connect() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4", $this->username, $this->password);

        return $conn;
    }
 
    protected function checkConnection($conn){
        if ($conn === false){
            die("ERROR: Could not connect.");
            return true;
        }
        return true;
    }
    protected function submit($conn){
        try {
            $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO `Applicants` (`ApplicationID`, `Status`, `First Name`, `Last Name`, `Middle Initial`, `DOB`, `Nationality`, `Gender`, `Marital Status`, `Family Type`, `Home Address`, `Mailing Address`, `Email Address`, `ID Number`, `Contact Name`, `Contact Relationship`, `Contact Telephone`, `Contact Address`, `Contact Email`, `Level of Study`, `Year of Study`, `Programme Name`, `Faculty Name`, `Name of School`, `Room Type`, `Roommate Preference`) VALUES (NULL, '', '', '$fname', '$lname', '$initial', '$dob', '$nationality', '$gender', '$marstatus', '$famtype', '$haddress', '$maddress', '$email', '$id', '$eContact1', '$contrelate', '$contNum', '$cAddress', '$contemail', '$levelofstudy', '$yearofstudy', '$faculty', 'UWI', '$roomtype', '$gendpref')";
            $conn->exec($sql);
        } catch (PDOException $error) {
            echo $error-> getMessage();
        }
        $conn = null; 
    }
    
}