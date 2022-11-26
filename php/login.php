<?php
    include 'classAutoloader.php';

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $inputUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $inputPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        try{
            $userContr = new UserController();

            $result = $userContr->findUser($inputUsername);

            if(count($result) > 0){
                
                if($inputPassword == $result[0]['Password']){
                    echo 1;
        
                    $_SESSION['username'] = $result[0]['Username'];
                    $_SESSION['id'] = $result[0]['ID'];
                    $_SESSION['firstName'] =  $result[0]['First Name'];
                    $_SESSION['lastName'] =  $result[0]['Last Name'];
                    $_SESSION['position'] = $result[0]['position'];
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