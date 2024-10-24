<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$con = mysqli_connect('localhost','tlevel_valerie','Mel.LizzA04','tlevel_valerie');
$result = mysqli_query($con, "SELECT * FROM students"); //students is a table in the database
echo"<table border =1 id=customers>";
while ($row = mysqli_fetch_array($result))


{
    echo "<tr><td>". $row['s_firstname']. "</td><td>" . $row['s_lastname'].  "</td><td>" . $row['s_email']."</td></tr>";
}
echo "</table>";
?>
</body>
</html>