<?php

#run only when submited button got clicked
if (isset($_POST['submit_subscriber'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    echo($firstname)."<br>";;
    echo($lastname)."<br>";
    echo($email)."<br>";
    echo($birth_date)."<br>";
    echo($gender)."<br>";
    # getting ip and time detail at enrty point
    include "get_ip_and_time.php";
    $current_time = $time;
    echo $current_time;
}
# connect to database and store user location data
    require '..\includes\connectdb.php';
    $sql = "INSERT INTO mail_subscribers (first_name, last_name, email, birth_date, gender, time) values (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../templates/subscribe.html?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $birth_date, $gender, $current_time);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../templates/index.html");
    exit();
?>