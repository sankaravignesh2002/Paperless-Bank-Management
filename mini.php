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
$date=date("Y-m-d");
if($conn->connect_error)
 {
     die("failed to connect");
 }
 $query = "SELECT *FROM account where Acc_number=$Account;";
 
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_assoc($result);
 
        $Name=$row["Name"];
        $Branch=$row["Branch Name"];
        $Mobile=$row["Phone"];
        $balance=$row["balance"];
        echo " <div class='w3-container w3-black w3-center w3-allerta' style = 'position:absolute; left:600px; top:10px;'>
        <h2 class='w3-xxlarge'>RFC BANK</h2>
     </div>";
        echo " <div style = 'position:absolute; left:900px; top:20px;'>
        <h2>Date:$date</h2>
     </div>";
        echo " <div class='w3-panel w3-border' style = 'position:absolute; left:200px; top:60px;'>
     <h2>Branch Name:$Branch</h2>
  </div>";
  echo " <div class='w3-panel w3-border' style = 'position:absolute; left:100px; top:200px;'>
  <h2 style='color:red;'>PERSONAL DETAILS</h2>
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
echo " <div class='w3-panel w3-border' style = 'position:absolute; left:900px; top:200px;'>
<h2 style='color:red;'>BALANCE</h2>
</div>";
echo " <div style = 'position:absolute; left:900px; top:300px;'>
<h2>AVAILABLE BALANCE: $balance</h2>
</div>";
echo "<button type='button' style = 'position:absolute; left:650px; top:600px;'>OK</button>";
 $conn->close();
?>
    </body>
</html>

  

