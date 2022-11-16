<?php
$conn=new mysqli('localhost','root','','paperless_bank_management');
$optradio=$_POST['optradio'];
$Account=$_POST['Account'];
$newn=$_POST['newn'];
$newm=$_POST['newm'];
$newa=$_POST['newa'];
if($conn->connect_error)
 {
     die("failed to connect");
 }
 if($optradio=="name")
 {
    $sql = "UPDATE account SET Name='$newn' WHERE Acc_number=$Account";
    if ($conn->query($sql) === TRUE) {
  echo "Name updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

 }
 if($optradio=="mobile")
 {
    $sql = "UPDATE account SET Phone=$newm WHERE Acc_number=$Account";
    if ($conn->query($sql) === TRUE) {
  echo "Mobile Number updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 if($optradio=="address")
 {
    $sql = "UPDATE account SET Address='$newa' WHERE Acc_number=$Account";
    if ($conn->query($sql) === TRUE) {
  echo "Address updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 $conn->close();
?>

  

