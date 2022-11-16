<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <style>
        table, th, td {
  border: 1px solid;
}
h1 {text-align: center;}
</style>
    </head>
    <body>
    <?php
$conn=new mysqli('localhost','root','','paperless_bank_management');
if($conn->connect_error)
 {
     die("failed to connect");
 }
 $query = "SELECT *FROM locker;";
 $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0)
  {
    echo "<br>
<div style='position:relative; left:500px; top:280px;'>
    <table >
  <tr>
    <th style='color:Orange;'>LOCKER SIZE</th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th style='color:Tomato;'>TYPE</th>
    <th style='color:SlateBlue;'>CHARGE /annum</th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
    <th>   </th>
  </tr>
  </table>
  </div>";
     while($row = mysqli_fetch_assoc($result)) 
     {
        $size=$row["size"];
        $type=$row["type"];
        $charge=$row["charge"];
        echo " <div class='w3-container w3-black w3-center w3-allerta' style = 'position:absolute; left:600px; top:10px;'>
        <h2 class='w3-xxlarge'>RFC BANK</h2>
     </div>";
echo " <div class='w3-text-red' style = 'position:absolute; left:480px; top:100px;'>
<h1>AVAILABLE LOCKERS(LOCKER FACILITIES)</h1>
</div>";
echo "<br>
<div style='position:relative; left:500px; top:280px;'>
<table>
  <tr>
    <td style='color:Orange;'>$size</td>
    <td style='color:Tomato;'>$type</td>
    <td style='color:SlateBlue;'>$charge</td>
  </tr>
</table>
</div>";
echo "<button type='button' style = 'position:absolute; left:650px; top:600px;'>OK</button>";
     }
 } 
 else 
 {
     echo "<div class='w3-panel w3-red'>
     <p>Click a valid option</p>
   </div>";
 }
 $conn->close();
?>
    </body>
</html>

  

