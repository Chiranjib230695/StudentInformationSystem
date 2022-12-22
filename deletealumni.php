<?php
include "connect.php";
$name=$_GET['id'];
$sql="delete from alumni where id='$id'";
$result=mysql_query($sql,$link);
if($result)
{
	header('location:viewalumni.php?ok=1');

}
else
{
	echo mysql_error;
}
?>