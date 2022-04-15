<?php
session_start();

$con=mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'login_db');
$dbname=$_POST['username'];
$dbpass=$_POST['password'];

$s="SELECT * FROM user WHERE username='$dbname' && password='$dbpass'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
    header('Location: index.html');
}
else if($num==1 && empty($dbname) || empty($dbpass)){
    header("Location: login.php?error=All fields are required!");
    exit();
}
else if('username'!=$dbname || 'password'!=$dbpass){
    header("Location: login.php?error=Incorrect username or password!");
    exit();
}
else{

}

