<?php

require_once 'UserModel.class.php';

class UserController{

    private $model;

    function __construct()
    {
        $this->model = new UserModel();
    }
    

    public function createUser($id, $username, $password) {
        $this->model->addUser($id, $username, $password);
    }


    public function findUser($data) {
        $user = $this->model->getUserByID($data);
        if (count($user) == 0){
            $user = $this->model->getUserByName(($data));
        }
        return $user;
    }
}

?>