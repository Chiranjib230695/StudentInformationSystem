<?php
include "connect.php";
if(issoopdepp($_POST["submit"]))

$roll=$_POST['roll']; 
$name= $_POST['name'];
$batch= $_POST['batch'];
$sem= $_POST['sem'];
$coe= $_POST['coe'];
$coi= $_POST['coi'];
$cot= $_POST['cot'];
$spe= $_POST['spe'];
$spi= $_POST['spi'];
$spt= $_POST['spt'];
$spep= $_POST['spep'];
$spip= $_POST['spip'];
$sptp= $_POST['sptp'];
$cne= $_POST['cne'];
$cni= $_POST['cni'];
$cnt= $_POST['cnt'];
$cnep= $_POST['cnep'];
$cnip= $_POST['cnip'];
$cntp= $_POST['cntp'];
$oopde= $_POST['oopde'];
$oopdi= $_POST['oopdi'];
$oopdt= $_POST['oopdt'];
$oopdep= $_POST['oopdep'];
$oopdip= $_POST['oopdip'];
$oopdtp= $_POST['oopdtp'];
$m3e= $_POST['m3e'];
$m3i= $_POST['m3i'];
$m3t= $_POST['m3t'];
$gt= $_POST['sem3tot'];

$sql="insert into 3sem values(null,'$roll','$name','$batch','$sem','Paper - 3.1','Computer Organization','$coe','$coi','$cot','Paper - 3.2','System Programming (Theory)','$spe','$spi','$spt','Practical','$spep','$spip','$sptp','Paper - 3.3','Computer Networking (Theory)',$cne','$cni','$cnt','Practical','$cnep','$cnip','$cntp','Paper - 3.4','Object Oriented Programming and Design','$oopde','$oopdi','$oopdt','Practical','$oopdep','$oopdip','$oopdtp','Paper - 3.5','Maths-III','$m3e','$m3i','m3t',$gt')";

if(mysql_query($sql,$link))
	{
	 header("location:marks.php?ok=1");
	}
else
	{
	 echo mysql_error();	
	}
?>