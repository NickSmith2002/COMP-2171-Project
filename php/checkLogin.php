<?php

session_start();

if(isset($_SESSION['id'])){
    echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
}
else{
    echo "KILL";
}