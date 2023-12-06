<!--***********DataBase Queries Starts*************-->

<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud_php") or die("Connection Failed");

$sql = "INSERT INTO students(sname,sadress,sclass,sphoneno) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/php-core/Task(Basic%20CRUD)%20--5/Task-5(CRUD)/");

mysqli_close($conn);

?>
<!--***********DataBase Queries Ends**************-->

