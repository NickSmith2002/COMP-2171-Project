<?php

class ApplicationController {

    private $model;

    function __construct()
    {
        $this->model = new ApplicationModel();
    }

    public function findApplication($applicationID) {
        $application = $this->model->getApplication($applicationID);
        return $application;
    }

    public function changeApplicationStatus($newStatus, $applicationID) {
        $this->model->changeStatus($newStatus, $applicationID);
    }

    public function removeApplication($applicationID) {
        $this->model->deleteApplication($applicationID);
    }

    public function changeAcceptedToResidents() {
        $this->model->changeToResidents();
    }

    public function addNewApplication($firstName, $lastName, $middleInitial, $nationality, 
        $gender, $emailAddress, $idNumber, $roommatePref)
    {
        $this->model->addApplication(
                                $firstName, $lastName, $middleInitial, $nationality, 
                                $gender, $emailAddress, $idNumber, $roommatePref
                            );
    }
}