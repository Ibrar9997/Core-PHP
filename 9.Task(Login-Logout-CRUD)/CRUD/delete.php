<!--**********Header************-->

<?php include 'header.php';

//<!--**********Header************-->

//<!--*******DataBase Queries Starts*********-->

if (isset($_POST['deletebtn'])) {

    //<!--**********DataBase Connection Starts***********-->

    include 'config.php';

    //<!--**********DataBase Connection Ends***********-->
    $stu_id = $_POST['sid'];

    $sql = "DELETE FROM students WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/php-core/Task(Basic%20CRUD)%20--5/Task-5(CRUD)");

    mysqli_close($conn);
}
?>

<!--*********DataBase Queries Ends*********-->

<!--**************Main Starts************-->

<div id="main-content">
    <h2>Delete Record</h2>

    <!--**********Data Table Starts************-->

    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

    <!--**********Data Table Ends************-->

</div>
</div>
</body>

</html>
<!--***************Main Ends************-->