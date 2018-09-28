<?php
if(isset($_POST['email'])) {
    $email = $_POST['email'];

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
    $sql = "INSERT INTO emailVer VALUES ('".$email."','".$otp."')";

    if ($conn->query($sql) === TRUE) {
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Optima2k18 <optima11th@gmail.com>' . "\r\n";
        $headers .= "Reply-to: optima11th@gmail.com" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
        $subject = "Email Verification for Optima 2018 User Registration";
        $content = "Dear participant, \r\n<br><br>Your OTP for email verification to register for OPTIMA 2018 is: ".$otp.". Please Enter this OTP in the verification field to go ahead with the registration. If this message was sent to you by mistake and you were not the intended recipient, please ignore it.";
        $sent = mail($email,$subject,$content,$headers);
        if($sent) {
            echo "true";
        }
        else {   
            echo "EMAIL_ERR : Email Couldn't be sent at the moment. Please try again.";
            $conn->query("DELETE FROM emailVer where email = '".$email."';");
        }
    } else {
        echo "DB_ERR ".$conn->error;
    }

    $conn->close();
}
else
    echo "POST_ERR : Data was not sent properly. You may have a slow internet connection.";
?>