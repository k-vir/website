<?php

#run only when submited button got clicked
if (isset($_POST['submit_signup'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpt_password = $_POST['rpt_password'];
    echo($firstname)."<br>";;
    echo($lastname)."<br>";
    echo($username)."<br>";
    echo($email)."<br>";
    echo($password)."<br>";
    echo($rpt_password)."<br>";
    # getting ip and time detail at enrty point
    include "..\includes\get_ip_and_time.php";
    $current_time = $time;
    echo $current_time;

    # connect to database
    require_once '..\includes\connectdb.php';
    require_once '..\includes\functions.php';

    if (empty_input_signup($firstname, $lastname, $username, $email, $password, $rpt_password) !== false) {
        header("location: ../templates/signup.php?error=emptyinput");
        exit();
    }
    if (invalid_uid($username) !== false) {
        header("location: ../templates/signup.php?error=invaliduid");
        exit();
    }
    if (invalid_email($email) !== false) {
        header("location: ../templates/signup.php?error=invalidemail");
        exit();
    }
    if(pwd_match($password, $rpt_password) !== false){
        header("location: ../templates/signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uid_exists($conn, $username, $email) !== false){
        header("location: ../templates/signup.php?error=usernameoremailexist");
        exit();
    }
    
    create_user($conn, $firstname, $lastname, $username, $email, $password, $current_time);
        

}else {
    header("location: ../templates/signup.php");
}
?>