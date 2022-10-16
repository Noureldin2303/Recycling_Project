<?php
  session_start();
  require "dbconn.php";
  
if(isset($_SESSION['username'])){
if(isset($_POST['submit']))
{
    $sname = $_SESSION['username'];
    $days = $_POST["days"];
    $time = $_POST["time"];
    $vou = $_POST["vouchers"];
    $material = $_POST['material'];
    
    foreach($material as $item)  
   {  
      $waste .= $item.", ";  
   }  
   
$result = mysqli_query($conn,"insert into downinfo (sname,day,time,voucher,waste) values ('$sname','$days','$time','$vou','$waste')");

if($result)
{
    echo '<script> alert("Success") </script>';    
    header("location: account.php");
    exit();
}
else{
    echo '<script> alert("failed") </script>';    
    header("location: home.php");
    exit();

}
}
}
?>