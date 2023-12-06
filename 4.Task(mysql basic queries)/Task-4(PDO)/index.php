<?php

/* *******DataBase Variables******* */
$dbname = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "";

/* ******DataBase Connection******* */
$conn = new PDO($dbname, $username, $password);

/* ******DataBase Query******* */
$sql = $conn->query("SELECT*From data");

$result = $sql->fetchAll();

echo "<pre>";
print_r($result);
echo "</pre>";

/* ******While Loop Display Data (Fetch_Both)******* */

echo "Display Data (Fetch_Both)";

while ($row = $sql->fetch()) {

    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

/* ******While Loop Display Data (Fetch_Assoc)******* */

echo "Display Data (Fetch_Assoc)";

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

/* ******While Loop Display Data (Fetch_Num)******* */

echo "Display Data (Fetch_Num)";

while ($row = $sql->fetch(PDO::FETCH_NUM)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

/* ******While Loop Display Data (Fetch_Obj)******* */

echo "Display Data (Fetch_OBJ)";

while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
