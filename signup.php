<?php 
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="wdp";

$check=mysqli_connect($servername,$username,$password,$dbname);
if($check){
    echo "connection ok";
    
}
else{
    echo "connection faild";
}

//getting value from HTML

$fname_2=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['user'];
$pass=$_POST['psw'];

$data="INSERT INTO registration VALUES('', '$fname_2','$lname','$email','$pass')";

$execute=mysqli_query($check,$data);
if($execute){
    //echo "data is send";
    // Redirect to home.html
    header('Location: log.html');
    exit();
    

}
else{
    echo "data is not send";
}
?>