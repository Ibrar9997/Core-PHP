<?php

    //Connecting To Database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "data";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (isset($_FILES['file'])) {
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_text = end(explode('.', $_FILES['file']['name']));
        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_text, $extensions) === true && $file_size < 2097152) {

            move_uploaded_file($file_tmp, "Uploaded-files/" . $file_name);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success...!</strong> You File Successfully Uploaded...!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error...!</strong> Your File Not Uploaded...!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }
    /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
    }*/


    //$sql = "CREATE TABLE `guest` (`Sno` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(11) NOT NULL ,PRIMARY KEY (`Sno`))";

    //$sql = "INSERT INTO `guest` (`Sno`, `Name`, `Email`) VALUES (NULL, '$name', '$email')";
    //$result = mysqli_query($conn, $sql);

    /*if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success...!</strong> You Name ' . $name . ' and Email ' . $email . ' Successfully submitted...!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      else{
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Error...!</strong> Your Data Not Submitted...!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }*/
    ?>