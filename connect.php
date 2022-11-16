<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
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
        $Name=$row["Name"];
        $Branch=$row["Branch Name"];
        $Mobile=$row["Phone"];
        $PAN=$row["PAN Number"];
        $Address=$row["Address"];
        $IFSC=$row["IFSC"];
        $date=$row["date"];
        echo " <div class='w3-container w3-black w3-center w3-allerta' style = 'position:absolute; left:600px; top:10px;'>
        <h2 class='w3-xxlarge'>RFC BANK</h2>
     </div>";
        echo " <div style = 'position:absolute; left:900px; top:20px;'>
        <h2>Date:$date</h2>
     </div>";
        echo " <div class='w3-panel w3-border' style = 'position:absolute; left:200px; top:60px;'>
     <h2>Branch Name:$Branch</h2>
  </div>";
        echo " <div class='w3-panel w3-border' style = 'position:absolute; left:900px; top:60px;'>
  <h2>Branch Code:$IFSC</h2>
</div>";
echo " <div class='w3-text-red' style = 'position:absolute; left:100px; top:200px;'>
<h2>BENEFICIARY DETAILS</h2>
</div>";
echo " <div style = 'position:absolute; left:80px; top:280px;'>
<h2>NAME: $Name</h2>
</div>";
echo " <div style = 'position:absolute; left:80px; top:330px;'>
<h2>ACCOUNT NUMBER: $Account</h2>
</div>";
echo " <div style = 'position:absolute; left:80px; top:380px;'>
<h2>MOBILE NUMBER: $Mobile</h2>
</div>";
echo " <div style = 'position:absolute; left:80px; top:430px;'>
<h2>PAN: $PAN</h2>
</div>";
echo " <div class='w3-text-red' style = 'position:absolute; left:900px; top:200px;'>
<h2>AMOUNT DETAILS</h2>
</div>";
echo " <div style = 'position:absolute; left:900px; top:300px;'>
<h2>AMOUNT: $Amount</h2>
</div>";
echo " <div class='w3-panel w3-border' style = 'position:absolute; left:900px; top:500px;'>
<h2>Depositer Signature</h2>
</div>";
echo " <div class='w3-panel w3-border' style = 'position:absolute; left:900px; top:500px;'>
<h2>Depositer Signature</h2>
</div>";
echo "<button type='button' style = 'position:absolute; left:650px; top:600px;'>OK</button>";
     }
 } 
 else 
 {
     echo "<div class='w3-panel w3-red'>
     <p>Enter a Valid Account Number</p>
   </div>";
 }
 $conn->close();
?>
    </body>
</html>

  

