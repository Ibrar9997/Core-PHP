<!--**********Header Starts************-->

<?php include 'header.php'; ?>

<!--**********Header Ends************-->

<!--**********Main Starts************-->

<div id="main-content">
    <h2>Add New Record</h2>

    <!--**********Data Table Starts************-->

    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>

        <!--**********DataBase Select Class Starts************-->

        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                //<!--**********DataBase Connection Starts***********-->

                include 'config.php';

                //<!--**********DataBase Connection Ends***********-->

                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>

                <?php } ?>
            </select>
        </div>

        <!--**********DataBase Select Class Ends************-->


        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>

    <!--**********Data Table Ends************-->

</div>
</div>
</body>

</html>
<!--**********Main Ends************-->