<?php 
$servername = "localhost";
$username ="root";
$password ="";
$registerform ="register";
$con=mysqli_connect("localhost","root","","signform",4000);
if ($con){
   echo "connected";
 }
else{
    echo "not connected";
}
$Firstname=$_POST["Firstname"];
$Lastname=$_POST['Lastname'];
$Male=$_POST['Male'];
$Female=$_POST['Female'];
$email=$_POST['email'];
$pass1=$_POST['password'];
$pass2=$_POST['confirmpassword'];

$sql="insert into login1 (FirstName,LastName,Male,Female,Email,Password,ConfirmPass) values('$Firstname','$Lastname','$Male','$Female','$email','$pass1','$pass2')";
$result=mysqli_query($con,$sql);
if($result){
    echo "inserted Successfully";
}
else{
    echo "error";
}

?>
