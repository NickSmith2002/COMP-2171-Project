
<?php
require_once('db_connect.php');

//Insert useer selection to the database

if(isset($_POST["allvalue"])){


    $title = $_POST["title"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $location = $_POST["location"];
    $description = $_POST["description"];


    $sql ="INSERT INTO Notices (title, date, time, location, description) values ('$title', '$date', '$time', '$location', '$description')";
    if($conn->query($sql)){
        header ("location:records.php?#records");
    }else{
     header ("location:records.php?status=$conn->error");
     }


}



if(isset($_POST["editvalue"])){

    $id = $_POST["idvalue"];
    $title = $_POST["title"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $location = $_POST["location"];
    $description = $_POST["description"];


    $sql="UPDATE Notices SET title='$title', date='$date', time='$time', location='$location', description='$description' WHERE id='$id' ";
    if($conn->query($sql)){
        header ("location:records.php?#records");
       }else{
        header ("location:records.php?status=$conn->error");
        }


}



if(isset($_GET["delete_record"])){

    $id = $_GET["delete_record"];

    $sql_delete  = "DELETE FROM Notices WHERE id='$id'";
    if($conn->query($sql_delete )){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record, try again later";
    }
    
}