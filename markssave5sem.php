<?php
include "connect.php";
if(issmpr($_POST["submit"]))

$roll=$_POST['roll']; 
$name= $_POST['name'];
$batch= $_POST['batch'];
$sem= $_POST['sem'];
$wte= $_POST['wte'];
$wti= $_POST['wti'];
$wtt= $_POST['wtt'];
$wtep= $_POST['wtep'];
$wtip= $_POST['wtip'];
$wttp= $_POST['wttp'];
$ede= $_POST['ede'];
$edi= $_POST['edi'];
$edt= $_POST['edt'];
$edep= $_POST['edep'];
$edip= $_POST['edip'];
$edtp= $_POST['edtp'];
$mse= $_POST['mse'];
$msi= $_POST['msi'];
$mst= $_POST['mst'];
$aie= $_POST['aie'];
$aii= $_POST['aii'];
$ait= $_POST['ait'];
$aiep= $_POST['aiep'];
$aiip= $_POST['aiip'];
$aitp= $_POST['aitp'];
$nse= $_POST['nse'];
$nsi= $_POST['nsi'];
$nst= $_POST['nst'];
$sqme= $_POST['sqme'];
$sqmi= $_POST['sqmi'];
$sqmt= $_POST['sqmt'];
$gt= $_POST['sem5tot'];


$sql="insert into 5sem values(null,'$roll','$name','$batch','$sem','Paper - 5.1','Web Technology','$wte','$wti','$wtt','Practical','$wtep','$wtip','$wttp','Paper - 5.2','Embedded Design','$ede','$edi','$edt','Practical',$edep','$edip','$edtp','Paper - 5.3','Multimedia System','$mse','$msi','$mst','Paper - 5.4','Artificial Intelligence','$aie','$aii','$ait','Practical','$aiep','$aiip','$aitp','Paper - 5.5','Elective-I (Network Security)','$nse','$nsi','$nst','Paper - 5.5','Elective-II (Software Quality Managment)','$sqme','$sqmi','$sqmt',$gt')";

if(mysql_query($sql,$link))
	{
	 header("location:markschoose.php?ok=1");
	}
else
	{
	 echo mysql_error();	
	}
?>