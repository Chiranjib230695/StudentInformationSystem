<?php
include "connect.php";
if(isset($_POST["submit"]))

$roll=$_POST['roll']; 
$name= $_POST['name'];
$batch= $_POST['batch'];
$sem= $_POST['sem'];
$mp = $_POST['mp'];
$ms = $_POST['ms'];
$mv = $_POST['mv'];
$tot = $_POST['sem6tot'];

$sql="insert into 6sem values(null,'$roll','$name','$batch','$sem','Paper 6.1','Major Project','Project','$mp','Seminar','$ms','Viva','$mv','$tot')";

if(mysql_query($sql,$link))
	{
	 header("location:markschoose.php?ok=1");
	}
else
	{
	 echo mysql_error();	
	}
?>