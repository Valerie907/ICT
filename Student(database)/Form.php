<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href='Style.css' />
</head>
<body>
<?php


$fname=$_REQUEST['firstname'];
$lname=$_REQUEST['lastname'];
$eemail=$_REQUEST['email'];

echo "<br>Your First name $fname";
echo "<br>Your Last name $lname";
echo "<br>Your Email $eemail";


$con = mysqli_connect('localhost','tlevel_valerie','Mel.LizzA04','tlevel_valerie');
mysqli_query($con,"INSERT INTO students(s_firstname, s_lastname, s_email) VALUES('$fname','$lname','$eemail')");


?>

</body>
</html>