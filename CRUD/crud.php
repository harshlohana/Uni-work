<?php
include '../connect.php';

if (isset($_POST['delete'])) {  
    $deleteid = $_POST['id'];
    //echo "<script>alert('$deleteid')</script>";  
	$sqldelete = "DELETE FROM f_customertable WHERE customer_id='$deleteid';";
	$resultfordelete = mysqli_query($conn, $sqldelete);
	if ($resultfordelete > 0) {
		echo "<script>alert('Record Deleted')</script>";
}else{
    echo "<script>alert('ERROR')</script>";
}
}

if (isset($_POST['update'])) {  
    $changeid = $_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $eaddress=$_POST['eaddress'];
    $pnumber=$_POST['pnumber'];
    //echo "<script>alert('$changeid')</script>";  
	$sqladd = "UPDATE f_customertable SET first_name='$fname',last_name='$lname',age='$age',email_address='$eaddress',phone_number='$pnumber' WHERE customer_id='$changeid'";
	$resultforupdate = mysqli_query($conn, $sqladd);
	if ($resultforupdate > 0) {
		echo "<script>alert('Record Updated')</script>";
}else{
    echo "<script>alert('ERROR')</script>";
}
}

if (isset($_POST['add'])) {  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$eaddress=$_POST['eaddress'];
$pnumber=$_POST['pnumber'];

$sql = "INSERT INTO f_customertable (first_name,last_name,age,email_address,phone_number)
VALUES ('$fname', '$lname','$age','$eaddress','$pnumber')";
$resultforupdate = mysqli_query($conn, $sql);
if ($resultforupdate > 0) {
    echo "<script>alert('Record Added')</script>";
}else{
echo "<script>alert('ERROR')</script>";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <title>My Records</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="styles.CSS.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
</head>
<body>
<!-- Logo -->
<div>
    <img src="Images/logo.png" alt="Logo" class="logo">
</div>
<!-- Page Header -->
<header>
    <div>
        <div class="center">
            <h1>MY RECORDS</h1>
        </div>
        <hr>
        <nav>
            <div class="navigation">
                <a href="index.html"><b>HOME</b></a>
                <a href="about%20us.html"><b>ABOUT US</b></a>
                <a href="Contact%20Us.html"><b>CONTACT</b></a>
            </div>
        </nav>
    </div>
</header>
</body>
<hr>
<!-- Page Content -->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<script>

</script>
<body>
<!--Show the app here.-->
<div id="container" style="max-width:1300px">

<form action="" method="post">
            <h3 class="h3">Submission Form For Test Drive</h3>
            <div class="submit" style="margin:10px;">
                <label for="firstname">First Name:</label>
                <input type="text" name="fname" id="firstname" placeholder="John">
            </div>
            <div class="submit" style="margin:10px;">
                <label for="lastname">Last Name: </label>
                <input type="text" name="lname" id="lastname" placeholder="Walker">
            </div>
            <div class="submit" style="margin:10px;">
                <label for="age">Age:</label>
                <input type="text" name="age" id="age" placeholder="21">
            </div>
            <div class="submit" style="margin:10px;">
                <label for="emailaddress">Email Address: </label>
                <input type="text" name="eaddress" id="emailaddress" placeholder="aaa@gmail.com">
            </div>
            <div class="submit" style="margin:10px;">
                <label for="phonenumber">Phone Number: </label>
                <input type="text" name="pnumber" id="phonenumber" placeholder="01632 960320">
            </div>
            <input class="submitbutton" name="add" type="submit" value="Submit" style="margin:10px;">
        </form>

  <table style="margin-top:50px;">
  <thead>
        <tr>
          <th>CustomerId</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>Phone number</th>
          <th>Actions</th>
        </tr>
      </thead>
 <tbody>
 <?php
        $sql = "SELECT * FROM f_customertable";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
               <tr id="<?php echo "div".$row['customer_id'];?>">
                <td><?php echo $row['customer_id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email_address']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['customer_id'];?>">
                        <button type="submit" id="<?php echo $row['customer_id'];?>" onclick="editFunction(this.id)">Edit</button>
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>  
        
        <?php }}
        $conn->close();
        ?>
 </tbody>
</table>
  </div>
</div>
    <div>
        <p style="color: black"> <b>FOLLOW MOTOR HUB</b></p>
    </div>
 <script>
   function editFunction(id){
    var recordDiv = document.getElementById("div"+id);
    recordDiv.innerHTML=`
    <form id="form${id}" action="" method="POST">
    <td><input form="form${id}" type="text" value="${id}" disabled=disabled></input></td>
    <td><input form="form${id}" type="text" name="fname"></input></td>
    <td><input form="form${id}" type="text" name="lname"></input></td>
    <td><input form="form${id}" type="text" name="eaddress"></input></td>
    <td><input form="form${id}" type="text" name="age"></input></td>
    <td><input form="form${id}" type="text" name="pnumber"></input></td>
    <td>
    <input form="form${id}" type="hidden" name="id" value="${id}">
    <button form="form${id}" type="submit" name="update" >Submit</button>
    <button form="form${id}" type="submit">Cancel</button>
    </td>
    </form>
    `;
}    
 </script>   
</body>    
</html>
