<?php  

$insert = false;

if(isset($_POST['name'])){

   // set connection variables
   $server="localhost";               
   $username = "root"; 
   $password = "";

   //create a database connection
   $con = mysqli_connect($server, $username, $password,"trip");

   //check for connection success
   if(!$con) {
    die("connection to this database failed due to ".mysqli_connect_error());
    }
    echo "Success Connecting to the DB";
echo "<br>";

//collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$feedback = $_POST['feedback'];
echo "<br>";
$sql = "INSERT INTO `trip`.`trip` (`name`,`age`, `gender`, `email`, `phone`, `feedback`, `dt`) VALUES ('$name','$age', '$gender', '$email', '$phone', '$feedback', current_timestamp());";
// echo $sql;

//execute the query
if($con->query($sql) === true){
    // echo "successfully inserted";

    //flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

//close the database connection
$con->close();
   
}

?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="gcek.jpg" alt="gcek">
    <div class="container">
        <?php if ($insert == true) { ?>
            <p id="p2">Thanks for submitting your form. We are happy to see you joining us for the US trip</p>
        <?php } else { ?>
            <h1>Welcome to GCEK US Trip Form</h1>
            <br>
            <hr>
            <br>
            <p id="p1">* Enter your details and submit this form to confirm your participation in the trip *</p>
            <br>
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                <input type="text" name="age" id="age" placeholder="Enter Your Age" required>
                <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" required>
                <input type="text" name="email" id="email" placeholder="Enter Your Email" required>
                <input type="text" name="phone" id="phone" placeholder="Enter Your Phone" required>
                <textarea name="feedback" id="feedback" cols="30" rows="10" placeholder="Enter Your Valuable Feedback Here"></textarea>
                <button class="btn">Submit</button>
            </form>
        <?php } ?>
    </div>
    <script src="index.js"></script>
</body>     
</html>