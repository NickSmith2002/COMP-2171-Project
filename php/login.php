<?php
    include 'classAutoloader.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $inputUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $inputPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        try{
            $userContr = new UserController();

            $result = $userContr->findUser($inputUsername);

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