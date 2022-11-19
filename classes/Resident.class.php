<?php
class Resident {
    // Properties
    private $firstName;
    private $lastName;
    private $middleName;
    private $residentID;
    private $position;
    private $dob;
    private $nationality;
    private $gender;
    private $maritialStatus;
    private $familyType;
    private $homeAddress;
    private $mailAddress;
    private $emailAddress;
    private $idNumber;
    private $emergencyContact;
    private $educationInfo;
    private $roomNumber;

    
    public function __construct($firstName, $lastName, $middleName, $residentID, $position, $dob, $nationality, $gender, $maritialStatus, $familyType, $homeAddress, $mailAddress, $emailAddress,
                                $idNumber, $contactName, $contactRelationship, $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, $yearofStudy, $programme, $facultyName,
                                $schoolName, $roomNumber)
    {
        $this->firstName           = $firstName;
        $this->lastName            = $lastName;
        $this->middleName          = $middleName;
        $this->residentID          = $residentID;
        $this->position            = $position;
        $this->dob                 = $dob;
        $this->nationality         = $nationality;
        $this->gender              = $gender;
        $this->maritialStatus      = $maritialStatus;
        $this->familyType          = $familyType;
        $this->homeAddress         = $homeAddress;
        $this->mailAddress         = $mailAddress;
        $this->emailAddress        = $emailAddress;
        $this->idNumber            = $idNumber;
        $this->emergencyContact    = array("name"=>$contactName, "relationship"=>$contactRelationship, "telephone"=>$contactTelephone, "address"=>$contactAddress, "email"=>$contactEmail);
        $this->educationInfo       = array("level"=>$levelOfStudy, "year"=>$yearofStudy, "programme"=>$programme, "faculty"=>$facultyName, "school"=>$schoolName);
        $this->roomNumber          = $roomNumber;

    }
  
    // Methods
    
    // Getters
    public function get_fullName() 
    {
      return $this->firstName . " " . $this->middleName . " " . $this->lastName;
    }
    public function get_firstName()
    {
      return $this->firstName;
    }
    public function get_lastName()
    {
      return $this->lastName;
    }
    public function get_middleName()
    {
      return $this->middleName;
    }
    public function get_DOB()
    {
      return $this->dob;
    }
    public function get_nationality()
    {
      return $this->nationality;
    }
    public function get_gender()
    {
      return $this->gender;
    }
    public function get_maritialStatus()
    {
      return $this->maritialStatus;
    }
    public function get_familyType()
    {
      return $this->familyType;
    }
    public function get_homeAddress()
    {
      return $this->homeAddress;
    }
    public function get_mailAddress()
    {
      return $this->mailAddress;
    }
    public function get_emailAddress()
    {
      return $this->emailAddress;
    }
    public function get_idNumber()
    {
      return $this->idNumber;
    }
    public function get_emergencyContact()
    {
      return $this->emergencyContact;
    }
    public function get_educationInfo()
    {
      return $this->educationInfo;
    }
    public function get_roomType()
    {
      return $this->roomType;
    }
    public function get_roommatePref()
    {
      return $this->roommatePreference;
    }

    //setters
}
?>