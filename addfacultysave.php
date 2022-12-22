<?php
include "connect.php";
if(isset($_POST["submit"]))
 
$name= $_POST['name'];
$designation= $_POST['designation'];
$dob= $_POST['dob'];
$gender= $_POST['gender'];
$address= $_POST['address'];
$blood= $_POST['blood'];
$qualification=$_POST['qualification'];
$contact= $_POST['tel'];
$email= $_POST['email'];
$photo= $_POST['photo'];


$sql="insert into faculty values('$name','$designation','$dob','$gender','$address','$blood','$qulification','$contact','$email','$photo')";

if(mysql_query($sql,$link))
	{
	 header("location:addfaculty.php?ok=1");
	}
else
	{
	 echo mysql_error();
	}
?>