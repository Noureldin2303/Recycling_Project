<?php
session_start();
if(isset($_POST['logout']))
{
session_unset();
session_destroy();
}
header("location: signin-up.php");
exit();
?>