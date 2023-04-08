<?php

class UserController extends UserModel {
    
    public function createUser($id, $username, $password) {
        $this->addUser($id, $username, $password);
    }


    public function findUser($data) {
        $user = $this->getUserByID($data);
        if (count($user) == 0){
            $user = $this->getUserByName(($data));
        }
        return $user;
    }
}

?>