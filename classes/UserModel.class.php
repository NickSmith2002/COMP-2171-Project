<?php

class UserModel extends DB {

    protected function getUserByName($username) {
        $stmt = $this->connect()->prepare("SELECT id, username, Password  FROM Users WHERE Username = :username");
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getUserByID($ID) {
        $stmt = $this->connect()->prepare("SELECT id, username, Password  FROM Users WHERE ID = :id");
        $stmt->bindValue(':id', $ID, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function getAllUsers() {
        $stmt = $this->connect()->prepare("SELECT id, username, Password  FROM Users");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    protected function addUser($ID, $username, $password){
        $stmt = $this->connect()->prepare("INSERT INTO Users (ID, Username, Password) VALUES (:id, :username, :password)");
        $stmt->bindValue(':id', $ID, PDO::PARAM_STR);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
    }
}