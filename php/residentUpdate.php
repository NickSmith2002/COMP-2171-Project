<?php

include 'classAutoloader.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $resview = new ResidentView();
    $rescontroller = new ResidentController();
    if(isset($_GET['view'])){
        if ($_GET['view'] == 'standardResidents'){
            echo $resview->presentStandardResidentTable();
        }

        if ($_GET['view'] == 'residentAdvisors'){
            echo $resview->presentResidentAdvisorTable();
        }
        if ($_GET['view'] == 'blockRepresentatives'){
            echo $resview->presentBlockRepTable();
        }
        if ($_GET['view'] == 'all'){
            echo $resview->presentAllResidentTable();
        }
        
    }
    if(isset($_GET['update'])){
        if($_GET['update'] == 'true'){
            $id=$_GET['id'];
            $firstname=$_GET['firstname'];
            $lastname=$_GET['lastname'];
            $midinitial=$_GET['midinitial'];
            $position=$_GET['position'];
            $phonenumber=$_GET['phonenumber'];
            $email=$_GET['email'];
            if(!empty($firstname)){
                $rescontroller -> changeResident($id,'`First Name`=\''. $firstname.'\'');
            }
            if(!empty($lastname)){
                $rescontroller -> changeResident($id,'`Last Name`=\''. $lastname.'\'');
            }
            if(!empty($midinitial)){
                $rescontroller -> changeResident($id,'`Middle Initial`=\''. $midinitial.'\'');
            }
            if($position != "Select"){
                $rescontroller -> changeResident($id,'Position=\''. $position.'\'');
            }
            if(!empty($phonenumber)){
                $rescontroller -> changeResident($id,'`Phone Number`=\''. $phonenumber.'\'');
            }
            if(!empty($email)){
                $rescontroller -> changeResident($id,'`Email Address`=\''. $email.'\'');
            }
        }   
    }
    if(isset($_GET['delete'])){
        if($_GET['delete'] == 'true'){
            $id=$_GET['id'];
            try{
                $rescontroller->removeResident($id);
                echo "Resident successfully removed";
            }
            catch(Exception $e){
                echo "Deletion failed";
            }
        }
    } 

    if(isset($_GET['position'])){
        if($_GET['position'] == 'check'){
            if($_SESSION['position']== "Resident Advisor"){
                echo "Resident Advisor";
            }
            else{
                echo "False";
            }
        }
    }
}
        

