<?php

$conn = mysqli_connect("localhost", "root", "", "login info");

if(!$conn){
    die("Connection Failed");
}

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$sql = "SELECT FROM * admin WHERE Email ='$Email' AND Password='$Password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) {
    echo "great";
    exit();
}else{
    echo"bruh";
}
mysqli_close($conn);
?>