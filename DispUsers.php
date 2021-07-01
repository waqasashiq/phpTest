<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP connect coding chellange</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/mystylesheet.css" rel="stylesheet" />
</head>
<body>
 
<div>

    <div class="topnav">
        <h1>Connect</h1>
        <p>PHP coding challenge</p>
    </div>

</div>
<div class="row">
    
</div>
<?php
include_once 'dbConfig.php';
$sql = "SELECT users.Fname, users.Lname,users.UserName, users.Email,address.Street, address.City,address.County,address.PostCode  FROM  users  INNER JOIN  address  ON users.UserName=address.UserName;";
$result = $db->query($sql);
 


if ($result->num_rows > 0) {
    // output data of each row
    
    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Street</th>
        <th scope="col">City</th>
        <th scope="col">County</th>
        <th scope="col">Post Code</th>
   </tr>
   ';
   echo' <tbody>
  
     ';
    while($row =  $result->fetch_assoc()) {
        echo ' <tr>';
         echo '<td>'.$row["Fname"].'</td>' ;
         echo '<td>'.$row["Lname"].'</td>' ;
         echo '<td>'.$row["UserName"].'</td>' ;
         echo '<td>'.$row["Email"].'</td>' ;
         echo '<td>'.$row["Street"].'</td>' ;
         echo '<td>'.$row["City"].'</td>' ;
         echo '<td>'.$row["County"].'</td>' ;
         echo '<td>'.$row["PostCode"].'</td>' ;
         
        echo '</tr>';





    //  print_r($row);
       // echo "<br> First Name ". $row["FName"]. " - Last Name: ". $row["LName"]. " "  . "<br>";
    }
} else {
    echo "0 results";
}
echo ' </tr>
      
</tbody>
</table>';
?>
</body>
</html>
