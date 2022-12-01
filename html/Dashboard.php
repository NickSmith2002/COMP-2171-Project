<?php
session_start();

if(!isset($_SESSION['id'])){
   header("Location: homepage.html");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Dashboard</title>
 <link rel="stylesheet" href="../css/Dashboard_styles.css">
 <script src="../js/dashboard.js"></script>
</head> 
<body>
<div class="container">
   <header>
      <h1>Welcome</h1>
      <p><?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] . " ";?> Dashboard</p>
      <button id="logout">LOG OUT</button>
   </header>

   <div class="grid">
      <img src="../images/Branding/logo.png" alt="Logo">
      <div class="buttons">
         <a href="../html/processApplication.html">Applications</a> 
         <a href="../html/roomAssignment.html">Room Assignmet</a>
         <a href="../html/residentUpdate.html">Residents</a>
         <a href="../php/event.php">Notice Board</a>
         <a href="../php/records.php">Edit Notices</a>
         <a href="../html/reportGeneration.html">Report Generation</a>
      </div>
   </div>

</div>
</body>
</html>
