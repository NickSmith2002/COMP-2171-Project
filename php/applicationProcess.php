<?php

include 'classAutoloader.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $appView = new ApplicationView();

    echo $appView->showAllApplications();
    
}

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    $appView = new ApplicationView();
    

    if(isset($_GET['view'])){
        if ($_GET['view'] == 'accepted'){
            echo $appView->showAcceptedApplications();
        } 
        if ($_GET['view'] == 'rejected'){
            echo $appView->showRejectedApplications();
        }
        if ($_GET['view'] == 'pending'){
            echo $appView->showPendingApplications();
        } 
        if ($_GET['view'] == 'all'){
            echo $appView->showAllApplications();
        }
    }

    if(isset($_GET['sort'])){
        if($_GET['sort'] == 'ID Number'){
            if($_GET['order'] == 'Ascending'){
                echo $appView->showAscendingID();
            }
            if($_GET['order'] == 'Descending'){
                echo $appView->showDescendingID();
            }
        }

        if($_GET['sort'] == 'Name'){
            if($_GET['order'] == 'Ascending'){
                echo $appView->showAscendingName();
            }
            if($_GET['order'] == 'Descending'){
                echo $appView->showDescendingName();
            }
        }
    }

    if(isset($_GET['search'])){
        $data = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
        echo $appView->showApplication($data);
    }

    if(isset($_GET['status'])){
        $newStatus = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $appContr = new ApplicationController();
        $appContr->changeApplicationStatus($newStatus, $id);
    }

    if(isset($_GET['details'])){
        $id = filter_input(INPUT_GET, 'details', FILTER_SANITIZE_STRING);
        echo $appView->printApplication($id);
    }
}