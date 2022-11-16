<?php
$optradio=$_POST['optradio'];
 if($optradio=="vrp")
 {
    header("Location:report.php");
    die;
 }
 if($optradio=="snf")
 {
    header("Location:notif.php");
    die;
 }
?>

  

