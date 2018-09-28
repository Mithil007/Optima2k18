<?php
if(isset($_GET['name'])) {
    $name = $_GET['name'];

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
    $sql = "SELECT college FROM (SELECT DISTINCT(college) AS college FROM user) as T WHERE college LIKE '".$name."%';";
    $result = $conn->query($sql);
    $college = "";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $college .= $row['college'].",";
        }       
        echo $college;
    } else {
        echo "false";
    }
    $conn->close();
}
else
    echo "POST_ERR : Data was not sent properly. You may have a slow internet connection.";
?>