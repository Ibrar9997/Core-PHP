<!--***********DataBase Queries Starts*************-->

<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['sadress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphoneno'];

//<!--**********DataBase Connection Starts***********-->

include 'config.php';

//<!--**********DataBase Connection Ends***********-->

$sql = "UPDATE students SET sname = '{$stu_name}', sadress = '{$stu_address}',sclass = '{$stu_class}', sphoneno = '{$stu_phone}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/php-core/Task(Basic%20CRUD)%20--5/Task-5(CRUD)");

mysqli_close($conn);

?>
<!--***********DataBase Queries Ends**************-->