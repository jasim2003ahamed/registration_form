<?php

$fname=$_POST['first-name'];
$lname=$_POST['last-name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
$pcode=$_POST['pin-code'];
$state=$_POST['state'];
$country=$_POST['country'];


// Database Connection
$host="localhost:3308";
$dbusername="root";
$dbpassword="";
$dbname="registration";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

$sql="INSERT INTO stdata(`first-name`,`last-name`,`dob`,`email`,`mobile`,`gender`,`address`,`city`,`pin-code`,`state`,`country`) values ('$fname','$lname','$dob','$email','$mobile','$gender','$address','$city','$pcode','$state','$country')";

$r=mysqli_query($conn,$sql);

if($r){
    echo "REGISTRATION SUCCESSFUL";
}
else{
    echo "ENTER CORRECT DETAILS";
}

?>