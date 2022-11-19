<?php
    $host = 'db4free.net';
    $username = 'swenstar';
    $password = 'ihatecomsci123';
    $dbname = 'georgealleyne';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $inputUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $inputPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $stmt = $conn->prepare("SELECT id, username, Password  FROM Users WHERE Username = :username");
            $stmt->bindValue(':username', $inputUsername, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $conn = null;

            if(count($result) > 0){
                
                if($inputPassword == $result[0]['Password']){
                    echo 1;
        
                    session_start();
                    $_SESSION['username'] = $result[0]['username'];
                    $_SESSION['id'] = $result[0]['id'];
                }
                else{
                    echo -1;
                }
                
            }
            else{
                echo 0;
            }
        }
        catch(Exception $e){
            echo 'ERROR HAS OCCURED: '.$e->getMessage();
        }
        
    }

?>