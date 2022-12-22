<?php
include "connect.php";
if(issmpr($_POST["submit"]))

$roll=$_POST['roll']; 
$name= $_POST['name'];
$batch= $_POST['batch'];
$sem= $_POST['sem'];
$dbmse= $_POST['dbmse'];
$dbmsi= $_POST['dbmsi'];
$dbmst= $_POST['dbmst'];
$dbmsep= $_POST['dbmsep'];
$dbmsip= $_POST['dbmsip'];
$dbmstp= $_POST['dbmstp'];
$ose= $_POST['ose'];
$osi= $_POST['osi'];
$ost= $_POST['ost'];
$fmace= $_POST['fmace'];
$fmaci= $_POST['fmaci'];
$fmact= $_POST['fmact'];
$see= $_POST['see'];
$sei= $_POST['sei'];
$set= $_POST['set'];
$cge= $_POST['cge'];
$cgi= $_POST['cgi'];
$cgt= $_POST['cgt'];
$cgep= $_POST['cgep'];
$cgip= $_POST['cgip'];
$cgtp= $_POST['cgtp'];
$mpr= $_POST['mpr'];
$mpp= $_POST['mpp'];
$mppro= $_POST['mppro'];
$mpt= $_POST['mpt'];
$gt= $_POST['sem4tot'];

$sql="insert into 4sem values(null,'$roll','$name','$batch','$sem','Paper - 4.1','Database Management System  (Theory)','$dbmse','$dbmsi','$dbmst','Practical','$dbmsep','$dbmsip','$dbmstp','Paper - 4.2','Operating System','$ose','$osi','$ost','Paper - 4.3','Financial Management and Accounting',$fmace','$fmaci','$fmact','Paper - 4.4','Software Engineering','$see','$sei','$set','Paper - 4.5','Computer Graphics (Theory)','$cge','$cgi','$cgt','Practical','$cgep','$cgip','$cgtp','Paper - 4.6','$mpr','$mpp','$mppro',$gt')";

if(mysql_query($sql,$link))
	{
	 header("location:marks.php?ok=1");
	}
else
	{
	 echo mysql_error();	
	}
?>