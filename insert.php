<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 27/10/2018
 * Time: 15:18
 */

include 'connect.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$eaddress=$_POST['eaddress'];
$pnumber=$_POST['pnumber'];

$sql = "INSERT INTO f_customertable (first_name,last_name,age,email_address,phone_number)
VALUES ('$fname', '$lname','$age','$eaddress','$pnumber')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>