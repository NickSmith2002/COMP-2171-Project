<?php

class UserModel extends DB {

    public function getUserByName($username) {
        $stmt = $this->connect()->prepare("SELECT ID, Username, `First Name`, `Last Name`, `Position`, Password FROM Users INNER JOIN Residents ON Users.ID = Residents.`Resident ID` WHERE Users.Username = :username");
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserByID($ID) {
        $stmt = $this->connect()->prepare("SELECT ID, Username, `First Name`, `Last Name`, `Position`, Password FROM Users INNER JOIN Residents ON Users.ID = Residents.`Resident ID` WHERE Users.ID = :id");
        $stmt->bindValue(':id', $ID, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers() {
        $stmt = $this->connect()->prepare("SELECT ID, Username, `First Name`, `Last Name`FROM Users INNER JOIN Residents ON Users.ID = Residents.`Resident ID`");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function addUser($ID, $username, $password){
        $stmt = $this->connect()->prepare("INSERT INTO Users (ID, Username, Password) VALUES (:id, :username, :password)");
        $stmt->bindValue(':id', $ID, PDO::PARAM_STR);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deleteUser(){
        
    }
}