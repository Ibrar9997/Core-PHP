<?php

$cookie_name = "user";
$cookie_value = "Abc";

//setcookie(name,        value,        expire,               path,  domain,   secure,   httponly)
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

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

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie not set";
    } else {
        echo "Your cookie are:  " . $_COOKIE[$cookie_name];
    }

    ?>
</body>

</html>