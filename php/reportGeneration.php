<?php

include 'classAutoloader.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    $resView = new ResidentView();

    //-------------------ALL RESIDENTS-----------------------
    if($_GET['view'] == 'Resident'){
       
        $tags = array("Resident ID"); 
        $columns = "`Resident ID` ";

        if($_GET['fname'] != ''){
            $columns .= ", `" . $_GET['fname'] . "` ";
            array_push($tags, "First Name");
        }
        if($_GET['lname'] != ''){
            $columns .= ", `" . $_GET['lname'] . "` ";
            array_push($tags, "Last Name");
        }
        if($_GET['mname'] != ''){
            $columns .= ", `" . $_GET['mname'] . "` ";
            array_push($tags, "Middle Initial");
        }
        if($_GET['position'] != ''){
            $columns .= ", `" . $_GET['position'] . "` ";
            array_push($tags, "Position");
        }
        if($_GET['nationality'] != ''){
            $columns .= ", `" . $_GET['nationality'] . "` ";
            array_push($tags, "Nationality");
        }
        if($_GET['room'] != ''){
            $columns .= ", `" . $_GET['room'] . "` ";
            array_push($tags, "Room Number");
        }

        echo $resView->reportResidents($columns, $tags);
    }

    //-------------------GENUS-----------------------
    if($_GET['view']=='Lynx' or $_GET['view'] == 'Genus' or $_GET['view'] == 'Pardus'){
    
        $block = $_GET['view'];
        $tags = array("Resident ID"); 
        $columns = "`Resident ID` ";

        if($_GET['fname'] != ''){
            $columns .= ", `" . $_GET['fname'] . "` ";
            array_push($tags, "First Name");
        }
        if($_GET['lname'] != ''){
            $columns .= ", `" . $_GET['lname'] . "` ";
            array_push($tags, "Last Name");
        }
        if($_GET['mname'] != ''){
            $columns .= ", `" . $_GET['mname'] . "` ";
            array_push($tags, "Middle Initial");
        }
        if($_GET['position'] != ''){
            $columns .= ", `" . $_GET['position'] . "` ";
            array_push($tags, "Position");
        }
        if($_GET['nationality'] != ''){
            $columns .= ", `" . $_GET['nationality'] . "` ";
            array_push($tags, "Nationality");
        }
        if($_GET['room'] != ''){
            $columns .= ", `" . $_GET['room'] . "` ";
            array_push($tags, "Room Number");
        }
        echo $resView->reportBlock($columns, $tags, $block);

    }
}