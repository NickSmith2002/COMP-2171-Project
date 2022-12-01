<?php date_default_timezone_set("Africa/lagos"); ?>
<?php
$servername ="db4free.net";
$username ="swenstar";
$password ="ihatecomsci123";
$databasename="georgealleyne";

$domain_name ="http://localhost/Kmirza_assignment/";
//create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
// if(!$conn){
//     die($conn->connect_error);
// }
?>