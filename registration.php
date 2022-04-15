<?php
session_start();
//header('Location: login.html');
$con=mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'login_db');
$dbname=$_POST['username'];
$dbemail=$_POST['email'];
$dbpass=$_POST['password'];
$dbpass1=$_POST['confirm_pass'];
$s="SELECT * FROM user WHERE username='$dbname'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
    header("Location:login.php?error=Username is already taken!");
    
}
else if($dbpass!=$dbpass1){
    header("Location:login.php?; error=Passwrords must match!");
    
}
else{
    $reg="insert into user(username, email, password) values ('$dbname', '$dbemail', '$dbpass')";
    mysqli_query($con, $reg);
    echo("Registered!!!");
}

