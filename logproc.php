<?php
session_start();

require "dbconn.php";
if(isset($_SESSION['username'])){
    header("location: home.php");
}
$uname = $_POST["uname"];
$pass = $_POST["password2"];

$_SESSION['username'] = $uname;

if($uname=="" || $pass==""){
    echo '<script> alert("Empty field") </script>';
    require "signin-up.html";
}
else{
    $r = mysqli_query($conn, "select * from upinfo where name='$uname' and password='$pass'") or die(mysqli_error());
    if(mysqli_num_rows($r) >= 1){
        echo '<script> alert("welcome back") </script>'; 
        header("location: home.php");
        exit();
    }
    else{
    echo '<script> alert("Invalid username or password") </script>';    
    require "signin-up.php"; 
    }
}

?>