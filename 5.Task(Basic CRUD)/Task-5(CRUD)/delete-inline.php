<!--***********DataBase Queries Starts*************-->

<?php

$stu_id = $_GET['id'];

//<!--**********DataBase Connection Starts***********-->

include 'config.php';

//<!--**********DataBase Connection Ends***********-->

$sql = "DELETE FROM students WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/php-core/Task(Basic%20CRUD)%20--5/Task-5(CRUD)");

mysqli_close($conn);

?>

<!--***********DataBase Queries Ends**************-->