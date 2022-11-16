<?php
$optradio=$_POST['optradio'];
 if($optradio=="challan")
 {
    header("Location:balance.html");
    die;
 }
 if($optradio=="update")
 {
    header("Location:upd.html");
    die;
 }
 if($optradio=="report")
 {
    header("Location:rep.html");
    die;
 }
 if($optradio=="accst")
 {
    header("Location:state.html");
    die;
 }
 if($optradio=="loans")
 {
    header("Location:update.html");
    die;
 }
 if($optradio=="locker")
 {
    header("Location:lock.php");
    die;
 }
?>

  

