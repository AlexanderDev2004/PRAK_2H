<?php
    if(isset($_POST["submit"])){
        $targetdir = "upload/";
        $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
        $filetype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
        
        $allowtype = array("jpg", "png", "jpeg", "gif");
        $maxsize = 5*1024*1024;
        
        
        if(in_array($filetype, $allowtype) && $_FILES["myfile"]["size"] <= $maxsize){
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
                echo "File uploaded successfully";
            } else {
                echo "Failed to upload file";
            }
        } else {
            echo "File type not allowed or file size exceeds the limit";
        }
    }
?>


