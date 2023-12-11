<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Get/Post Form</title>
</head>

<body>

<!--*************Nav Bar*****************-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/php-core/Task(Form%20Submittion%20(GET%20&%20POST))--1/Forms/">Form (Get/Post)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/php-core/Task(Form%20Submittion%20(GET%20&%20POST))--1/Forms/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php-core/Task(Form%20Submittion%20(GET%20&%20POST))--1/Forms/data.php">Data</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!--****************PHP Code*************-->

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
    }

    //Connecting To Database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "data";

    $conn = mysqli_connect($servername, $username, $password, $database);

    //$sql = "CREATE TABLE `guest` (`Sno` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(11) NOT NULL ,PRIMARY KEY (`Sno`))";

    $sql = "INSERT INTO `guest` (`Sno`, `Name`, `Email`) VALUES (NULL, '$name', '$email')";
    $result = mysqli_query($conn, $sql);
      
      if($result){
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
      }
    ?>

    <!--*****************Form******************-->

    <div class="container mt-3">
        <h2>Enter your Name and Email</h2>
        <form action="/php-core/Task(Form%20Submittion%20(GET%20&%20POST))--1/Forms/" method="post">
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="name" name="name" id="name" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>