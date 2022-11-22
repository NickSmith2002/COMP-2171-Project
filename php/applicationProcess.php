<?php

include 'classAutoloader.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $appView = new ApplicationView();
    echo $appView->showAllApplications();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    $appView = new ApplicationView();

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