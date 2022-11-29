<?php

include 'classAutoloader.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $resview = new ResidentView();
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
    }
    if(isset($_GET['delete'])){
    }

}
        

