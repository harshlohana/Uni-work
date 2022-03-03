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

if (isset($_POST['add'])) {  
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
  <table>
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
    <button form="form${id}" type="submit" name="add" >Submit</button>
    <button form="form${id}" type="submit">Cancel</button>
    </td>
    </form>
    `;
}    
 </script>   
</body>    
</html>
