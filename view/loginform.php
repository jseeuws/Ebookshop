<?php
session_start();

$email = $password = "";
$emailerr = $passworderr = "";

/*email*/
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["email"])){
        $emailerr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
        $_SESSION["email"] = test_input($_POST["email"]);
    }
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailerr = '<div class="alert alert-danger" role="alert">*required</div>';
        }
/*end email*/

        if(empty($_POST["password"])){
        $passworderr = '<div class="alert alert-danger" role="alert">*required</div>';
        } else{
        $_SESSION["password"] = test_input($_POST["password"]);
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

?>