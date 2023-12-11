<?php 

    //Connecting To Database


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "data";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Not Connected" . mysqli_connect_error());
    }
    else{
        echo "Connection Successful<br>";
    }
    $sql = "SELECT * FROM `guest`";
    $result = mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    echo "<br>";

    if($num>0){
        $row = mysqli_fetch_assoc($result);
        }

    while($row = mysqli_fetch_assoc($result)){
        echo $row['Sno']. "     Name:   ". $row['Name']."      Email:   ". $row['Email'];
        echo "<br>";
    }
?>