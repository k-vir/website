<?php

# making unique upload folder for new user
    include "get_ip_and_time.php";
    $current_user = $time;
    if(!is_dir($target_dir . $time)) {
        $tmp_user = mkdir($target_dir . $time);  
        echo "directory created!!!";
    }
    $tmp_user = $target_dir . $time;
    $tmp_user_folder = $target_dir . $time . "/";
    echo $tmp_user_folder."<br>";

    # making unique output folder for new user
    if(!is_dir("../output/". $time)){
        $tmp_user_output = mkdir("../output/". $time);
        echo "directory created!!!";
    }
    $tmp_user_output = "../output/". $time;
    $tmp_user_output_folder = "../output/" . $time . "/";
    echo $tmp_user_output_folder."<br>";


    # connect to database and store user location data
    require '..\includes\connectdb.php';
    $sql = "INSERT INTO tmp_user_detail (username, folder_location, tool_used) values (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../jpgtopng.html?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "sss", $time, $tmp_user_folder, $tool_used);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);