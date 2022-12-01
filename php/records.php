<?php
require_once('db_connect.php');

// We need to use sessions, so you should always start sessions using the below code.
session_start();

if(!isset($_SESSION['id'])){
  header("Location: ../html/homepage.html");
  exit();
}

if(!($_SESSION['position'] == 'Resident Advisor' || $_SESSION['position'] == 'Block Representative')){
  header("Location: ../html/notAuthorized.html");
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

      <div>
			  <a href="../html/Dashboard.php">Dashboard</a>
        <a href="event.php" target ="_blank"><i class="fas fa-resident-view" ></i>Resident View</a>
			</div>

<?php  if(isset($_GET["edit"]) && $_GET["edit"] !=""){?>

<form action="action.php" method="post" id="formsubmit">
<?php
$id = $_GET["edit"];
$sql_event = "SELECT * FROM Notices WHERE id=$id";
$event_details = $conn->query($sql_event);
$row_event_details = $event_details->fetch_assoc();
 ?>

        <input type="hidden" id="allvalue" name="editvalue">
        <input type="hidden" id="idvalue" name="idvalue" value="<?php echo $id ?>">


        <section class="sec">


            <h2 class="text-center mb-3">Edit an event</h2>


            <div class="row">


                <div class="col-6">


                    <div class="form-group">
                        <label for="title" class="mb-2"><strong>Title</strong></label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row_event_details["title"]; ?>">
                        <div class="text-danger" id="titleError"></div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="date" class="mb-2"><strong>Date</strong></label>
                        <input type="date" class="form-control" id="date" name="date"  value="<?php echo $row_event_details["date"]; ?>">
                        <div class="text-danger" id="dateError">

                        </div>
                    </div>



                    <div class="form-group mt-3">
                        <label for="time" class="mb-2"><strong>Time</strong></label>
                        <input type="time" class="form-control" id="time" name="time"  value="<?php echo $row_event_details["time"]; ?>">
                        <div class="text-danger" id="timeError">

                        </div>
                    </div>


                </div>







                <div class="col-6">

                    <div class="form-group">
                        <label for="location" class="mb-2"><strong>Location</strong></label>
                        <input type="text" class="form-control" id="location" name="location"  value="<?php echo $row_event_details["location"]; ?>">
                        <div class="text-danger" id="locationError">

                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="description" class="mb-2"><strong>Description</strong></label>
                        <textarea class="form-control" id="description" name="description" rows="5"> <?php echo $row_event_details["description"]; ?> </textarea>
                    </div>
                    <div class="text-danger" id="descriptionError">

                    </div>



                </div>




                <div style="display:inline-block; width:80%; margin-top:20px;">
            <input type="button" onclick="formvalidation()" value="Edit now" style="padding:10px; border-radius:10px; font-size:15px;">
        </div>
            </div>




        </section>
    </form>






    <?php }else{ ?>


      <form action="action.php" method="post" id="formsubmit">
        <input type="hidden" id="allvalue" name="allvalue">


        <section class="sec">


            <h2 class="text-center mb-3">Make an Event</h2>


            <div class="row">


                <div class="col-6">


                    <div class="form-group">
                        <label for="title" class="mb-2"><strong>Title</strong></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Example input">
                        <div class="text-danger" id="titleError"></div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="date" class="mb-2"><strong>Date</strong></label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Another input">
                        <div class="text-danger" id="dateError">

                        </div>
                    </div>



                    <div class="form-group mt-3">
                        <label for="time" class="mb-2"><strong>Time</strong></label>
                        <input type="time" class="form-control" id="time" name="time" placeholder="Another input">
                        <div class="text-danger" id="timeError">

                        </div>
                    </div>


                </div>







                <div class="col-6">

                    <div class="form-group">
                        <label for="location" class="mb-2"><strong>Location</strong></label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Another input">
                        <div class="text-danger" id="locationError">

                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="description" class="mb-2"><strong>Description</strong></label>
                        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                    <div class="text-danger" id="descriptionError">

                    </div>



                </div>




                <div style="display:inline-block; width:80%; margin-top:20px;">
            <input type="button" onclick="formvalidation()" value="Post now" style="padding:10px; border-radius:10px; font-size:15px;">
        </div>
            </div>




        </section>
    </form>
<?php } ?>


    

<section class="sec2" id="records">

<div class="row" style="min-width:900px; padding:10px;">
  <div class="col-12 bg-secondary text-light p-1">
    <div class="row">
      <div class="col-1">
        #
      </div>
      <div class="col-2">
        Title
      </div>
      <div class="col-2">
        Description
      </div>
      <div class="col-1">
        Time
      </div>
      <div class="col-2">
        Date
      </div>
      <div class="col-2">
        Location
      </div>
      <div class="col-2">
        Action
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
    $eventDate = strtotime(date('Y-m-d', strtotime("$date") ) );
    $currentDate = strtotime(date('Y-m-d'));
    $echoDate = (date('Y-m-d'));

?>

  <div class="col-12 p-1 pt-2" style="background-color:#ddd; color:black; border-bottom: 2px solid grey;" id="<?php echo $row_event_details["id"]; ?>">
    <div class="row">
      <div class="col-1">
        <?php echo $x ?>
      </div>
      <div class="col-2">
      <?php echo $row_event_details["title"]; ?>
      </div>
      <div class="col-2">
      <?php echo $row_event_details["description"]; ?>
      </div>
      <div class="col-1">
      <?php echo $row_event_details["time"]; ?>
      </div>
      <div class="col-2">
      <?php echo $row_event_details["date"]; ?>
      </div>
      <div class="col-2">
      <?php echo $row_event_details["location"]; ?>
      </div>
      <div class="col-2">
      <a href="records.php?edit=<?php echo $row_event_details["id"]; ?>"><button class="btn btn-light btn-sm rounded-2">Edit</button></a>
      <button class="btn btn-light btn-sm rounded-2" onclick="delete_record(<?php echo $row_event_details['id'] ?>)">Delete</button>
      </div>
    </div>
  </div>


<?php $x+=1; } ?>



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
      alert("Processed successfully!");
      var formsubmit = document.getElementById("formsubmit");
      formsubmit.submit();
    }

}



function delete_record(a){

  if(confirm("Are you sure you want to delete this record?")){

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   
    document.getElementById(a).style.transform= "translate(100px, -100%)";
    document.getElementById(a).style.opacity ="0";
    document.getElementById(a).style.transition = "all 1s";
    document.getElementById(a).addEventListener("transitionend", () => {
    document.getElementById(a).remove(); 
  })
  alert(this.response);

      
}

};
xmlhttp.open("GET","action.php?delete_record="+a, true);
xmlhttp.send();

          }

        }
    </script>

    </body>
    </html>