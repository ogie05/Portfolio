<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTemp = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','pdf');

    if(in_array($fileActualExt,$allowed)){
        if ($fileError === 0) {
            if ($fileSize < 500000) {
               $fileDistination = '../img/'.".".$fileActualExt;
               move_uploaded_file($fileTemp,$fileDistination);
               header("location: ../profile.php?uploadsucess");
            }else{
                echo "Your Image is too big!";
                 exit();
            }
        }else{
            echo "There was an error uploading";
            exit(); 
        }
    }else{
        echo "Please upload image extension!";
        exit();
    }
}