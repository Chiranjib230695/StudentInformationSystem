<?php
include "connect.php";
if(isset($_POST["submit"]))

$batch=$_POST['batch']; 
$id= $_POST['id'];
$name= $_POST['name'];
$fname= $_POST['fname'];
$dob= $_POST['dob'];
$gender= $_POST['gender'];
$address= $_POST['address'];
$blood= $_POST['blood'];
$contact= $_POST['tel'];
$email= $_POST['email'];
$photo= $_POST['photo'];


$sql="insert into student values('$batch','$id','$name','$fname','$dob','$gender','$address','$blood','$contact','$email','$photo')";

if(mysql_query($sql,$link))
	{
	 header("location:addstudent.php?ok=1");
	}
else
	{
	 echo mysql_error();
	}
?>