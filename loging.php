<?php 
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="wdp";

$check=mysqli_connect($servername,$username,$password,$dbname);
if($check){
    header('Location: log.html');
    exit();
    
}
else{
    echo "connection faild";
}

//get data

$user=$_POST['user'];
$psw=$_POST['psw'];

$data="SELECT * FROM registration WHERE user='$user' AND psw='$psw'";
$execute=mysqli_query($check,$data);
$count=mysqli_num_rows($execute);

if($count>=1){
    // Redirect to home.html
    header('Location: home.html');
    exit();
}
else{
    echo"<script>alert('Please check your email and password anr try again')</script>";
}
?>