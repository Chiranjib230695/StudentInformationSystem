<?php
	session_start();
	if(!isset($_SESSION["status"]))
	{
		header("location:index.php");	
	}
?>
<?php
	session_start();
	include "connect.php";
	if(isset($_POST["login"]))
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		$sql="select * from login where password='$password'";
		$result=mysql_query($sql,$link);
		$n=mysql_num_rows($result);
		if($n==0)
		{
			header("location:loginadmin.php?log=0");
			return;	
		}
		else
		{
			$row=mysql_fetch_assoc($result);
			if($password==$row["password"])
			{
				if($username=="admin")
				{
					$_SESSION["status"]=true;
					$_SESSION["user"]=$username;
					header("location:admin_panel.php");	
				}
			}
			else
			{
				header("location:loginadmin.php?log=1");
			}
		}
	}
?>