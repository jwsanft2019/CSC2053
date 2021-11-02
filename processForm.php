<?php include 'header.php'; ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3> Output of POST superglobal array <br>";
    foreach ($_POST as $key=> $value) {
        echo "key is $key and value is $value <br>";
    }
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $year = $_POST["year"];
    echo "User first name is $fname";
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "<h3>Output of GET superglobal array is <br>";
    foreach ($_GET as $key=> $value) {
        echo "key is $key and value is $value <br>";
    }
}