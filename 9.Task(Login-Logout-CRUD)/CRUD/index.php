<!--**********Header Starts************-->
<?php
include 'header.php';
?>

<!--**********Header Ends************-->

<div id="main-content">
  <h2>All Records</h2>

  <!--**********DataBase Queries Starts************-->
  <?php
  //<!--**********DataBase Connection Starts***********-->

  include 'config.php';

  //<!--**********DataBase Connection Ends***********-->

  $sql = "SELECT * FROM students JOIN studentclass WHERE students.sclass = studentclass.cid";
  $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

  //<!--**********DataBase Queries Ends************-->

  //<!--**********All DataBase Records************-->

  if (mysqli_num_rows($result) > 0) {
  ?>

    <table cellpadding="7px">
      <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['sid']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['sadress']; ?></td>
            <td><?php echo $row['cname']; ?></td>
            <td><?php echo $row['sphoneno']; ?></td>
            <td>
              <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
              <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <!--**********All DataBase Records************-->

  <?php } else {
    echo "<h2>No Record Found</h2>";
  }

  //<!--***********Close DataBase Connection**************-->

  mysqli_close($conn);

  //<!--***********Close DataBase Connection**************-->

  ?>
</div>
</div>
</body>

</html>