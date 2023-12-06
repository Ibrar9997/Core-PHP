<?php


//************Session Starts************

session_start();

$_SESSION["name"] = "ABC";


//***********Session Check*************


if (!isset($_SESSION["name"])) {
    echo "Session not set";
} else {
    echo "Your Session is set <br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (!isset($_SESSION["name"])) {
        echo "Session not set";
    } else {
        echo "Your Session are:  " . $_SESSION["name"] . "<br>";
    }
    ?>

</body>

</html>

<?php


//**************Session Destroy************


session_unset();

session_destroy();


?>