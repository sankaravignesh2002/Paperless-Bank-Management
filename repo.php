<?php
$conn=new mysqli('localhost','root','','paperless_bank_management');
$cid=$_POST['cid'];
$res=$_POST['res'];
if($conn->connect_error)
 {
     die("failed to connect");
 }
 $sql = "INSERT INTO report (cust_id,item) VALUES ($cid,'$res')";
    if ($conn->query($sql) === TRUE) {
  echo "Report sent successfully";
} else {
  echo "Error while sending the report" . $conn->error;
}
 $conn->close();
?>