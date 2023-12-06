<!--**********Header Starts************-->

<?php include 'header.php'; ?>

<!--**********Header Ends************-->

<!--**********Main Starts************-->

<div id="main-content">
  <h2>Update Record</h2>

  <!--***********DataBase Queries Starts*************-->

  <?php
  //<!--**********DataBase Connection Starts***********-->

  include 'config.php';

  //<!--**********DataBase Connection Ends***********-->

  $stu_id = $_GET['id'];

  $sql = "SELECT * FROM students WHERE sid = {$stu_id}";
  $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

  //<!--***********DataBase Queries Ends**************-->

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>

      <!--**********Data Table Starts************-->

      <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="sadress" value="<?php echo $row['sadress']; ?>" />
        </div>

        <!--**********DataBase Select Class Starts************-->

        <div class="form-group">
          <label>Class</label>
          <?php
          $sql1 = "SELECT * FROM studentclass";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if (mysqli_num_rows($result1) > 0) {
            echo '<select name="sclass">';
            while ($row1 = mysqli_fetch_assoc($result1)) {
              if ($row['sclass'] == $row1['cid']) {
                $select = "selected";
              } else {
                $select = "";
              }
              echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            }
            echo "</select>";
          }
          ?>
        </div>

        <!--**********DataBase Select Class Ends************-->

        <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphoneno" value="<?php echo $row['sphoneno']; ?>" />
        </div>
        <input class="submit" type="submit" value="Update" />
      </form>
      <!--**********Data Table Ends************-->

  <?php
    }
  }
  ?>
</div>
</div>
</body>

</html>
<!--**********Main Ends************-->