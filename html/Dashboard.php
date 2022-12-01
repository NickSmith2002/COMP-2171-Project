<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Dashboard</title>
 <link rel="stylesheet" href="../css/Dashboard_styles.css">
</head> 
<body>
<div class="container">
 <header>
 <h1>Welcome</h1>
 <p><?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] . " ";?> Dashboard</p>
 </header>
 <main>

<img src="logo.png" alt="Cat">
<div class="grid">
<div class="buttons">
   <a href="../html/processApplication.html"><button type="submit" class="btn">Applications</a> 
   <a href="../html/roomAssignment.html"><button type="submit" class="btn">Room Assignmet</button>
   <a href="../html/residentUpdate.html"><button type="submit" class="btn">Residents</button>
   <a href="../php/event.php"><button type="submit" class="btn">Notice Board</button>
   <a href="../php/records.php"><button type="submit" class="btn">Edit Notices</button>
</div>
</div>

</div>
</body>
</html>
