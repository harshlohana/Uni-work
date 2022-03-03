<?php
$servername = "devweb2021.cis.strath.ac.uk";
$username = "fmb21175";
$password = "ohFeesh1adoo";
$dbname = "fmb21175";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $eaddress=$_POST['eaddress'];
    $pnumber=$_POST['pnumber'];

    $sql = "INSERT INTO f_customertable (first_name,last_name,age,email_address,phone_number)
    VALUES ('$fname','$lname','$age','$eaddress','$pnumber')";

    if ($conn->query($sql) === TRUE) {
    echo "success";
    }else {
        echo "fail" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>