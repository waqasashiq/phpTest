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
    <div class="col-md-4 centered">
        <h2>This is just a dummy test for now</h2>
        </form>
    </div>
</div>
<?php
$sql = "SELECT * FROM users ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> First Name ". $row["FName"]. " - Last Name: ". $row["LName"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
?>
</body>
</html>
