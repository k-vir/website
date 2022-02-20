<?php

$target_dir = "uploads/";



if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];

    $file_ext = explode('.',$file_name);
    $file_actual_ext = strtolower(end($file_ext));

    $valid_ext = array('jpeg', 'jpg', 'png');

    if(in_array($file_actual_ext,$valid_ext)){
        if($file_error === 0){
            if($file_size < 500000){
                $file_new_name = uniqid('',true) . "." . $file_actual_ext;
                $target_file = $target_dir . $file_new_name;
                move_uploaded_file($file_tmp_name,$target_file);
                echo ("oka");
                

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