<?php
$con = mysqli_connect('localhost','tlevel_valerie','Mel.LizzA04','tlevel_valerie');
$std_id =$_REQUEST['search'];
$result = mysqli_query($con,"SELECT  s_firstname FROM students WHERE s_firstname = '$std_id'");
$row = mysqli_fetch_array($result);
echo $row['s_firstname'].$row['s_email'];

