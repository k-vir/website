<?php
    

$target_dir = "../uploads/";
$tool_used = "jpg_to_png";

#run only when submited button got clicked
if (isset($_POST['submit'])){
    
    $file = $_FILES['file'];
    
    $file_name = $file['name'];
    echo $file_name."<br>";;
    $file_type = $file['type'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];

    $file_ext = explode('.',$file_name);
    $file_actual_name = str_replace(" ", "_", strtolower(explode(".", $file_name)[0]));
    echo $file_actual_name."<br>";;

    $file_actual_ext = strtolower(end($file_ext));

    #valid extentions
    $valid_ext = array('jpeg', 'jpg');

    #checking if the extention is valid
    if(in_array($file_actual_ext,$valid_ext)){
        #checking if there is no error uploading
        if($file_error === 0){
            #checking max file size
            if($file_size < 5000000){
                
                # making unique folder for new user
                include "get_ip_and_time.php";
                $current_user = $time
                if(!is_dir($target_dir . $time)) {
                    $tmp_user = mkdir($target_dir . $time);  
                    echo "directory created!!!";
                }
                
                $tmp_user = $target_dir . $time;
                $tmp_user_folder = $target_dir . $time . "/";
                echo $tmp_user_folder."<br>";

                # connect to database and store data

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


                #assingning unique name to uploaded file
                $file_new_name = uniqid('',true) . "." . $file_actual_ext;
                $target_file = $tmp_user_folder . $file_new_name;
                echo($target_file)."<br>";



                
                move_uploaded_file($file_tmp_name,$target_file);
                if(!is_dir("../output/". $time)){
                    $tmp_user_output = mkdir("../output/". $time);
                    echo "directory created!!!";
                }
                
                $tmp_user_output = "../output/". $time;
                $tmp_user_output_folder = "../output/" . $time . "/";
                echo $tmp_user_output_folder."<br>";
                $output_file_name = $tmp_user_output_folder . $file_actual_name;
                echo $output_file_name."<br>";
                #running python script
                $command = exec("python ../includes/JpgToPng.py $target_file $output_file_name");
                echo $command;
                
                // header("Location: ../jpgtopng.html");
                // exit();
            }else{
                echo "The file is too large";
            }

        }else{
            echo "There was an error uploading your file!";
        }
    }else {
        echo "You cannot upload files of this type!";
    }


}
?>