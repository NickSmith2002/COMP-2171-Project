<?php

  include 'classAutoloader.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $fname = $_GET["fname"];
      $initial = $_GET["mname"];
      $lname = $_GET["lname"];
      $id=$_GET["id"];
      $gender=$_GET["gender"];
      $nationality = $_GET["nationality"];
      $email = $_GET["email"];
      $roommatePref = $_GET['roompref'];

      $appContr = new ApplicationController();

      $appContr->addNewApplication($fname, $lname, $initial, $nationality, $gender, $email, $id, $roommatePref);
      echo "Application Submitted";
    }

    
    
?>