<?php

#run only when submited button got clicked
if (isset($_POST['submit_login'])){
    $username = $_POST['uid'];
    $password = $_POST['password'];
    echo($username)."<br>";
    echo($password)."<br>";

    # connect to database
    require_once '..\includes\connectdb.php';
    require_once '..\includes\functions.php';

    if (empty_input_login($username, $password) !== false) {
        header("location: ../templates/login.php?error=emptyinput");
        exit();
    }
    
    login_user($conn, $username, $password);
        

}else {
    header("location: ../templates/login.php");
}
