<?php
if(isset($_POST['name']) && isset($_POST['college']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $college = $_POST['college'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "optima";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $otp = rand(1000,9999);
    $sql = "INSERT INTO user VALUES ('".$name."','".$email."','".$phone."','".$college."')";

    if ($conn->query($sql) === TRUE) {
        echo "true";
    } else {
        echo "DB_ERR".$conn->error;
    }

    $conn->close();
}
else
    echo "POST_ERR";
?>