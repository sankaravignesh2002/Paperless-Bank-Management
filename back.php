<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <style>
        table, th, td {
  border: 1px solid;
}</style>
    </head>
    <body>
    <?php
$conn=new mysqli('localhost','root','','paperless_bank_management');
$option=$_POST['option'];
if($conn->connect_error)
 {
     die("failed to connect");
 }
 $query = "SELECT *FROM loan where loan_name='$option';";
 $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0)
  {
     while($row = mysqli_fetch_assoc($result)) 
     {
        $Interest_Rate=$row["Interest_Rate"];
        $Loan_Amount=$row["Loan_Amount"];
        $Repayment=$row["Repayment"];
        $Collateral=$row["Collateral"];
        echo " <div class='w3-container w3-black w3-center w3-allerta' style = 'position:absolute; left:600px; top:10px;'>
        <h2 class='w3-xxlarge'>RFC BANK</h2>
     </div>";
echo " <div class='w3-text-red' style = 'position:absolute; left:480px; top:100px;'>
<h2>LOAN DETAILS FOR $option</h2>
</div>";
echo " <div style = 'position:absolute; left:70px; top:280px;'>
<table>
  <tr>
    <th style='color:Orange;'>INTEREST RATE</th>
    <th style='color:Orange;'>LOAN AMOUNT</th>
    <th style='color:Orange;'>REPAYMENT</th>
    <th style='color:Orange;'>COLLATERAL</th>
  </tr>
  <tr>
    <td>$Interest_Rate</td>
    <td>$Loan_Amount</td>
    <td>$Repayment</td>
    <td>$Collateral</td>
  </tr>
</table>
</div>";
echo "<button type='button' style = 'position:absolute; left:650px; top:600px;'>OK</button>";
     }
 } 
 else 
 {
     echo "<div class='w3-panel w3-red'>
     <p>Click a Valid Loan Type</p>
   </div>";
 }
 $conn->close();
?>
    </body>
</html>

  

