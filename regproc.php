<?php
session_start();
require "dbconn.php";
if(isset($_SESSION['username'])){
    header("location: home.php");
}
$uname = $_POST["name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$city = $_POST["city"];
$address = $_POST["address"];
$pass = $_POST["password"];
$day;
$time;
$vou;
$_SESSION['username'] = $uname;

if($uname=="" || $mail=="" || $phone=="" || $city=="" || $address=="" || $pass=="")
{
    echo '<script> alert("Empty field") </script>';
    require "signin-up.php";
}
else{
    $r = mysqli_query($conn, "select * from upinfo where name='$uname'") or die(mysqli_error());
    if(mysqli_num_rows($r) >= 1){
        echo '<script> alert("Username Already Taken") </script>';
        require "signin-up.php";
    }
    else{
    $res = mysqli_query($conn, "insert into upinfo (name,mail,phone,city,address,password) values ('$uname','$mail','$phone','$city','$address','$pass')");
    echo '<script> alert("reg. success") </script>';    
    header("location: signin-up.php");
    exit();
    }
}

?>