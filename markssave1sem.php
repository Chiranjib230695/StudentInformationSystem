<?php
include "connect.php";
if(isset($_POST["submit"]))

$roll=$_POST['roll']; 
$name= $_POST['name'];
$batch= $_POST['batch'];
$sem= $_POST['sem'];
$cppse= $_POST['cppse'];
$cppsi= $_POST['cppsi'];
$cppst= $_POST['cppst'];
$cppsep= $_POST['cppsep'];
$cppsip= $_POST['cppsip'];
$cppstp= $_POST['cppstp'];
$bee= $_POST['bee'];
$bei= $_POST['bei'];
$bet= $_POST['bet'];
$beep= $_POST['beep'];
$beip= $_POST['beip'];
$betp= $_POST['betp'];
$m1e= $_POST['m1e'];
$m1i= $_POST['m1i'];
$m1t= $_POST['m1t'];
$h1e= $_POST['h1e'];
$h1i= $_POST['h1i'];
$h1t= $_POST['h1t'];
$fe= $_POST['fe'];
$fi= $_POST['fi'];
$ft= $_POST['ft'];
$et= $_POST['et'];
$gt= $_POST['sem1tot'];

$sql="insert into 1sem values(null,'$roll','$name','$batch','$sem','Paper - 1.1','Computer Programming & Problem Solving (Theory)','$cppse','$cppsi','$cppst','Practical','$cppsep','$cppsip','$cppstp','Paper - 1.2','Basic Electronics (Theory)','$bee','$bei','$bet','Practical','$beep','$beip','$betp','Paper - 1.3','Mathematics - I','$m1e','$m1i','$m1t','Paper - 1.4','Humanities - I','$h1e','$h1i','$h1t','Paper - 1.5','Foundation of IT','$fe','$fi','$ft','Paper - 1.6','Environmental Studies','$et','$gt')";

if(mysql_query($sql,$link))
	{
	 header("location:marks.php?ok=1");
	}
else
	{
	 echo mysql_error();	
	}
?>