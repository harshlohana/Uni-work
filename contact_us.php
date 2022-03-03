<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="styles.CSS.css" rel="stylesheet">
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
            <h1>CONTACT US</h1>
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
<hr>
<!-- Page Content -->
<div class="paragraph">
    <p>As the originators of some of the world’s most luxurious and satisfying automobiles, we strive to have our customers totally satisfied with <br>their purchases and overall ownership experience. As a result, you will find the same attention to detail that goes into the sales pitch also applies to you and your degree of total satisfaction.</p>
    <br>
</div>
<div>
    <br>
    <br>
<!-- Red boxes when left blank -->
    <?php
    $firstname = strip_tags(isset($_post["fname"]) ? $_POST["fname"] : "");
    $lastname = strip_tags(isset($_post["lname"]) ? $_POST["lname"] : "");
    $age = strip_tags(isset($_post["age"]) ? $_POST["age"] : "");
    $emailaddress = strip_tags(isset($_post["eaddress"]) ? $_POST["eaddress"] : "");
    $phonenumber = strip_tags(isset($_post["pnumber"]) ? $_POST["pnumber"] : "");
    $dateoftestdrive = strip_tags(isset($_post["dateoftestdrive"]) ? $_POST["dateoftestdrive"] : "");
    $carID = strip_tags(isset($_post["carID"]) ? $_POST["carID"] : "");
    ?>

    <form action="contact_us.php" method="post">
        <h3 class="h3">Submission Form For Test Drive</h3>
        <div class="submit">
            <label for="firstname">First Name:</label><br>
            <input type="text" name="fname" id="firstname" placeholder="John" value="<?php echo $firstname; ?>" <?php if ($firstname==="") echo 'style="background-color: white;"'; ?>><br>
        </div>
        <div class="submit">
            <label for="lastname">Last Name: </label><br>
            <input type="text" name="lname" id="lastname" placeholder="Walker" value="<?php echo $lastname; ?>" <?php if ($lastname==="") echo 'style="background-color: white;"'; ?>><br>
        </div>
        <div class="submit">
            <label for="age">Age:</label><br>
            <input type="text" name="age" id="age" placeholder="21" value="<?php echo $age; ?>" <?php if ($age==="") echo 'style="background-color: white;"'; ?>><br>
        </div>
        <div class="submit">
            <label for="emailaddress">Email Address: </label><br>
            <input type="text" name="eaddress" id="emailaddress" placeholder="aaa@gmail.com" value="<?php echo $emailaddress; ?>" <?php if ($emailaddress==="") echo 'style="background-color: white;"'; ?>><br>
        </div>
        <div class="submit">
            <label for="phonenumber">Phone Number: </label><br>
            <input type="text" name="pnumber" id="phonenumber" placeholder="01632 960320" value="<?php echo $phonenumber; ?>" <?php if ($phonenumber==="") echo 'style="background-color: white;"'; ?>><br>
        </div>
        <div class="submit">
            <label for="dateoftestdrive">Date Of Test Drive: </label><br>
            <input type="text" name="dateoftestdrive" id="dateoftestdrive" placeholder="21/01/2022" value="<?php echo $dateoftestdrive; ?>" <?php if ($dateoftestdrive==="") echo 'style="background-color: white;"'; ?>><br>
        </div>
        <div class="submit">
            <label for="carID">Chosen Car ID Number: </label><br>
            <select name="CarID" id="carID" value="<?php echo $carID; ?>" <?php if ($carID==="") echo 'style="background-color: white;"'; ?>><br>
                <option value="#1">#1</option>
                <option value="#2">#2</option>
                <option value="#3">#3</option>
                <option value="#4">#4</option>
                <option value="#5">#5</option>
                </select>
            </div>
        </div>
        <input class="submitbutton" type="submit" value="Submit">
    </form>
</div>
<!-- Footer-->
<br>
<br>
<br>
<hr>
<div>
    <p style="color: black"> <b>FOLLOW MOTOR HUB</b></p>
</div>
</body>
</html>
</body>
</html>