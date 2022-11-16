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
    $date=date("Y-m-d");
$conn=new mysqli('localhost','root','','paperless_bank_management');
if($conn->connect_error)
 {
     die("failed to connect");
 }
 $query = "SELECT *FROM notify where mat_date>=$date;";
 $result1 = mysqli_query($conn, $query);
 if (mysqli_num_rows($result1) > 0)
  {
     while($row = mysqli_fetch_assoc($result1)) 
     {
        $loan_id=$row["loan_id"];
        $cust_id=$row["cust_id"];
        $amt=$row["amt"];
        $to=$row["mail"];
        $type=$row["type"];
        $Name=$row["Name"];
$subject = "Loan Due Regarding";
$body = "Hi $Name 
         Your $type Loan has reached Maturity Date 
         Loan Number:$loan_id
         Please Visit Bank to avoid Unnecessary Problems";
$sender = "From:sankaravignesh@student.tce.edu";
if(mail($to, $subject, $body, $sender))
{
    echo "<br> Email sent successfully to $Name";
}
else
{
    echo "Sorry, failed while sending mail!";
}    

    }
 } 
 else 
 {
     echo "<div class='w3-panel w3-red'>
     <p>NO MAILS TO SEND</p>
   </div>";
 }
 $conn->close();
?>
    </body>
</html>

  


