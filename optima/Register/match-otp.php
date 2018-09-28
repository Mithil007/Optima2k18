<?php
if(isset($_POST['email']) && isset($_POST['otp'])) {
    $email = $_POST['email'];
    $otp = $_POST['otp'];
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
    $sql = "SELECT otp  FROM emailVer WHERE email = '".$email."';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        if($row['otp'] == $otp)
            echo "true";
        else
            echo "false";
    } 
    $conn->close();
}
else
    echo "POST_ERR : Data was not sent properly. You may have a slow internet connection.";
?>