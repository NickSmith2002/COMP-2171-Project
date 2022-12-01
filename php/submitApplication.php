<?php

  include 'classAutoloder.php'
    $fname=$initial=$lname=$id=$gender=$dob=$nationality=$marstatus=$telephone=$haddress=$maddress=$email=$famtype=$numchildren="";
    $eContact1=$contrelate=$cAddress=$contNum=$contEmail=$eContact2=$contrelate2=$cAddress2=$contNum2=$contEmail2="";
    $levelofstudy=$yearofstudy=$faculty=$programme=$firstgenstudent="";
    $accquest1=$roomtype=$gendpref=$matename=$interest=$artinterest=$instrument="";
    spl_autoload_register('myAutoLoader');


function myAutoLoader($className){
    $path = "../classes/";
    $extension = ".class.php";
    $fullPath = $path.$className.$extension;

    if (!file_exists($fullPath)) {
        return false;
    }
    include_once $fullPath;
}
myAutoLoader(DB);

function variableLoad(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fname = test_input($_POST["Fname"]);
      $initial = test_input($_POST["Initial"]);
      $lname = test_input($_POST["Lname"]);
      $id=test_input($_POST["ID"]);
      $gender=test_input($_POST["gender"]);
      $dob= test_input($_POST["dob"]);
      $nationality = test_input($_POST["nation"]);
      $marstatus = test_input($_POST["marstatus"]);
      $telephone = test_input($_POST["telnum"]);
      $haddress = test_input($_POST["home"]);
      $maddress = test_input($_POST["mail"]);
      $email = test_input($_POST["email"]);
      $famtype = test_input($_POST["famtype"]);
      $numchildren = test_input($_POST["numchildren"]);
      $eContact1 = test_input($_POST["contname1"]);
      $contrelate = test_input($_POST["relationship"]);
      $cAddress = test_input($_POST["contaddress"]);
      $contEmail = test_input($_POST["contemail"]);
      $contNum = test_input($_POST["contnumber"]);
      $eContact2 = test_input($_POST["contname2"]);
      $contrelate2 = test_input($_POST["relationship2"]);
      $cAddress2 = test_input($_POST["contaddress2"]);
      $contEmail2 = test_input($_POST["contemail2"]);
      $contNum2 = test_input($_POST["contnumber2"]);

      $levelofstudy = test_input($_POST["levelofstudy"]);
      $yearofstudy = test_input($_POST["yearofstudy"]);
      $programme = test_input($_POST["Programme"]); 
      $faculty = test_input($_POST["faculty"]);
      $firstgenstudent = test_input($_POST["firstgenstudent"]);

      $accquest1 = test_input($_POST["accquest1"]);
      $roomtype = test_input($_POST["roomtype"]);
      $gendpref = test_input($_POST["gendpref"]);
      $matename = test_input($_POST["matename"]);
      $DOA = test_input($_POST["DOA"]);
      $interest[] = test_input($_POST["interest"]);
      $artinterest[] = test_input($_POST["artinterest"]);
      $instrument = test_input($_POST["instrument"]);
      $famtype = test_input($_POST["famtype"]);
     }
     $db= new DB();
    if ($db.checkConnect($conn) === true){
      $db.submit($conn, $fname, $lname, $initial, $dob, $nationality, $gender, $marstatus, $famtype, $haddress, $maddress, $email, $id, $eContact1, $contrelate, $contNum, $cAddress, $contemail, $levelofstudy, $yearofstudy, $faculty, 'UWI', $roomtype, $gendpref);
    }
    
    }
    
?>