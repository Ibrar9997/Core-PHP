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

    <?php include 'navbar.php'; ?>


    <!--*************DataBase*****************-->

    <?php include 'database.php' ?>

    <!--*****************Form******************-->

    <div class="container mt-3">
        <h2>Enter your Name and Email</h2>
        <form action="#" method="">
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="name" name="name" id="name" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-control">
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="response">
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                var name = $("#name").val();
                var email = $("#email").val();
                var age = $("#age").val();

                if (name == "" || email == "" || age == "") {
                    $('#response').fadeIn();
                    $('#response').html('All Field are Required');
                }
            });
        });
    </script>
</body>

</html>