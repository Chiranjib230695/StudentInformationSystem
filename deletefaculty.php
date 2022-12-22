<?php
include "connect.php";
$name=$_GET['name'];
$sql="delete from faculty where name='$name'";
$result=mysql_query($sql,$link);
if($result)
{
	header('location:viewfaculty.php?ok=1');

}
else
{
	echo mysql_error;
}
?>