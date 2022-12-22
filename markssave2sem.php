<?php
include "connect.php";
if(isset($_POST["submit"]))

$roll=$_POST['roll']; 
$name= $_POST['name'];
$batch= $_POST['batch'];
$sem= $_POST['sem'];
$dse= $_POST['dse'];
$dsi= $_POST['dsi'];
$dst= $_POST['dst'];
$dsep= $_POST['dsep'];
$dsip= $_POST['dsip'];
$dstp= $_POST['dstp'];
$m2e= $_POST['m2e'];
$m2i= $_POST['m2i'];
$m2t= $_POST['m2t'];
$tfcse= $_POST['tfcse'];
$tfcsi= $_POST['tfcsi'];
$tfcst= $_POST['tfcst'];
$dclde= $_POST['dclde'];
$dcldi= $_POST['dcldi'];
$dcldt= $_POST['dcldt'];
$dcldep= $_POST['dcldep'];
$dcldip= $_POST['dcldip'];
$dcldtp= $_POST['dcldtp'];
$dce= $_POST['dce'];
$dci= $_POST['dci'];
$dct= $_POST['dct'];
$dcep= $_POST['dcep'];
$dcip= $_POST['dcip'];
$dctp= $_POST['dctp'];
$hum2e= $_POST['h2e'];
$hum2i= $_POST['h2i'];
$hum2t= $_POST['h2t'];
$gt= $_POST['sem2tot'];

$sql="insert into 2sem values(null,'$roll','$name','$batch','$sem','Paper - 2.1','Data Structures (Theory)','$dse','$dsi','$dst','Practical','$dsep','$dsip','$dstp','Paper - 2.2','Maths-II','$m2e','$m2i','$m2t','Paper - 2.3','Theoretical Foundation of Computer Science','$tfcse','$tfcsi','$tfcst','Paper - 2.4','Digital Circuits and Logic Design (Theory)','$dclde','$dcldi','$dcldt','Practical','$dcldep','$dcldip','$dcldtp','Paper - 2.5','Digital Communication (Theory)','$dce','$dci','$dct','Practical','$dcep','$dcip','$dctp','Paper - 2.6','Humanities -II','$hum2e','$hum2i','$hum2t','$gt')";

if(mysql_query($sql,$link))
	{
	 header("location:markschoose.php?ok=1");
	}
else
	{
	 echo mysql_error();	
	}
?>