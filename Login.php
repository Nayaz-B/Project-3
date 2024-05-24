<?php 
$ con=mysqli_connect("127.0.0.1","root","","signform",4000);
if ($con){
    echo "connected";
}
else{
    echo "not connected";
}
$un=$_Post['Username'];
$pass=$_Post['password'];
$result=mysqli_query ($con,$sql);
$sql= "select" * "form register where Username='$un' and password='$pass'";
$count=mysqli_num_rows ($result);

if ($count>0){
    header("location :index.html");
}
else{
    header ("location:Login.php");
}
?>