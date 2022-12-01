<?php
require_once('db_connect.php');

session_start();

if(!isset($_SESSION['id'])){
  header("Location: ../html/homepage.html");
  exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Assignment</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/notices.css">
</head>

<body>


  <section class="sec2" id="records">
    <a href="../html/Dashboard.php">GO TO DASHBOARD</a>
    <h2 class="text-center mb-3">Notice Board</h2>
    <div class="row" style="min-width:900px; padding:10px;">
      <div class="col-12 bg-secondary text-light p-1">
        <div class="row">
          <div class="col-1">
            #
          </div>
          <div class="col-2">
            Title
          </div>
          <div class="col-3">
            Description
          </div>
          <div class="col-2">
            Time
          </div>
          <div class="col-2">
            Date
          </div>
          <div class="col-2">
            Location
          </div>
        </div>
      </div>



      <?php

      //Getting item name and cost from the database

      $sql_event = "SELECT * FROM Notices";
      $event_details = $conn->query($sql_event);
      $x = 1;

      while ($row_event_details = $event_details->fetch_assoc()) {
        
        date_default_timezone_set('Cuba');
        $date = $row_event_details["date"];
        $eventDate = strtotime(date('Y-m-d', strtotime("$date")));
        $currentDate = strtotime(date('Y-m-d'));
                

        if ($eventDate >= $currentDate) {

      ?>

          <div class="col-12 p-1 pt-2" style="background-color:#ddd; color:black; border-bottom: 2px solid grey;">
            <div class="row">
              <div class="col-1">
                <?php echo $x ?>
              </div>
              <div class="col-2">
                <?php echo $row_event_details["title"]; ?>
              </div>
              <div class="col-3">
                <?php echo $row_event_details["description"]; ?>
              </div>
              <div class="col-2">
                <?php echo $row_event_details["time"]; ?>
              </div>
              <div class="col-2">
                <?php echo $row_event_details["date"]; ?>
              </div>
              <div class="col-2">
                <?php echo $row_event_details["location"]; ?>
              </div>
            </div>
          </div>


      <?php $x += 1;
        }}?>



    </div>


  </section>










  <script>
    function formvalidation() {
      
      var title = document.getElementById("title").value;
      var date = document.getElementById("date").value;
      var time = document.getElementById("time").value;
      var location = document.getElementById("location").value;
      var description = document.getElementById("description").value;
      var validate = 1;

      if (title == "") {
        alert("Your title is required");
        var validate = 0;
      }

      if (date == "") {
        alert("Your date is required");
        var validate = 0;
      }

      if (time == "") {
        alert("Your time is required");
        var validate = 0;
      }

      if (location == "") {
        alert("Your location is required");
        var validate = 0;
      }

      if (description == "") {
        alert("Your description is required");
        var validate = 0;
      }


      if (validate == 1) {
        alert("Event created successfully!");
        var formsubmit = document.getElementById("formsubmit");
        formsubmit.submit();
      }






    }
  </script>
</body>

</html>