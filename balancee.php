<!DOCTYPE html>
<head>
    <title>PAPERLESS BANK MANAGEMENT</title>
    <link rel="stylesheet">
    <style>
        body 
        {
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
          position: absolute;
          top: 40%;
          width: 100%;
          text-align: center;
          font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
$conn=new mysqli('localhost','root','','paperless_bank_management');
$Account=$_POST['Account'];
$Amount=$_POST['Amount'];
if($conn->connect_error)
 {
     die("failed to connect");
 }
 $query = "SELECT *FROM account where Acc_number=$Account;";
 $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0)
  {
     while($row = mysqli_fetch_assoc($result)) 
     {
        
         echo "Name:" .$row["Name"];
         echo "</br>";  
         echo "Branch:" .$row["Branch Name"];
         echo "</br>";  
         echo "Mobile:" .$row["Mobile Number"];
         echo "</br>";  
         echo "Address:" .$row["Address"];
         echo "</br>";  
         echo "IFSC:" .$row["IFSC"];
         echo "</br>";  
         echo "Balance:" .$row["balance"];
     }
 } 
 else 
 {
     echo "0 results";
 }
 $conn->close();
?>
    <h2>Welcome to Paperless Bank System</h2>
    <h1>Balance Enquiry</h1>
    <form name="paper" method="post" action="connect.php">
    <input type ="text" placeholder ="Account Number" name="Account"><br>
    <input type ="text" placeholder ="Deposit Amount" name="Amount"><br>
    <input type="submit" name="Submit" id="Submit" value="Submit">
    </form>
</body>
</html>