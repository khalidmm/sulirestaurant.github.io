<?php
$con=mysql_connect('localhost','root')
if($con){
	echo "Connection successfull";

mysql_select_db($con,'youtubeuserdata');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into userinfo(user,email.mobile,comment)
values('$user','$email','$mobile','$comment')";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>

