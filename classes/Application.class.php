<?php
class Application {
    // Properties
    private $status;
    private $firstName;
    private $lastName;
    private $middleName;
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
    private $roomType;
    private $roommatePreference;
    private $roommateName;
    
    public function __construct($status, $firstName, $lastName, $middleName, $dob, $nationality, $gender, $maritialStatus, $familyType, $homeAddress, $mailAddress, $emailAddress,
                                $idNumber, $contactName, $contactRelationship, $contactTelephone, $contactAddress, $contactEmail, $levelOfStudy, $yearofStudy, $programme, $facultyName,
                                $schoolName, $roomType, $roommatePreference, $roommateName)
    {
        $this->status              = $status;
        $this->firstName           = $firstName;
        $this->lastName            = $lastName;
        $this->middleName          = $middleName;
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
        $this->roomType            = $roomType;
        $this->roommatePreference  = $roommatePreference;
        $this->roommateName        = $roommateName;
    }
  
    // Methods
    //getters
    public function get_status(){
      return $this->status;
    }
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
    public function get_roommateName()
    {
      return $this->roommateName;
    }


    //setters
    public function set_status($status) 
    {
      $this->name = $status;
    }
}
?>