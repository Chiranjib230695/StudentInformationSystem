<!doctype html>
<html>
<link href="style.css" type="text/css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	color: #FFF;
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
	background-image:url(image/deep%20blue.jpg);
	}
input[type=text] {
    width: 100%;
    padding: 12px 50px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color: white;
    background-image: url(image/usericon.png);
    background-position: 10px 10px; 
    background-repeat: no-repeat;

}
input[type=password] {
    width: 100%;
    padding: 12px 50px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color: white;
    background-image: url(image/password.png);
    background-position: 10px 10px; 
    background-repeat: no-repeat;

}
input[type=text]:focus {
    border: 3px solid #3C3;
}
input[type=password]:focus {
    border: 3px solid #3C3;
}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="login.php">
  <p align="center">&nbsp;</p>
  <table width="80%" border="0" align="center">
    <tr>
      <td width="62" align="left"><a href="index.php"><img src="image/Aasam-agriculture-univeristy-recruitment-2016.png" width="50" height="50"  alt=""/></a></td>
      <td width="738" height="55" align="left"><font size="5" onClick="document.location.href='index.php'">Assam Agriculture University</font></td>
      <td width="793" align="right"><font size="5">Record Management System</font></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="left">&nbsp;</p><p align="right">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    <p align="center"><span style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Admin Login</span></p>

  <table width="511" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="247" align="center"><input name="username" type="text" id="username" placeholder="User Name" size="51"></td>
    </tr>
    <tr>
      <td height="64" align="center"><input name="password" type="password" id="password" placeholder="Password" size="51"></td>
    </tr>
  </table>
  <table width="22%" border="0" align="center" cellpadding="2" cellspacing="1">
    <tr align="center">
      <td><input name="login" type="submit" class="button5" id="login" value="   Log In  "></td>
      <td><input name="cancel" type="submit" class="button7" id="cancel" value="   Cancel  " formaction="index.php"></td>
    </tr>
    <tr align="center">
<!--      <td colspan="2"><input name="forgot" type="submit" class="button6" id="forgot" value="                Forgot Password ?             "></td>
-->    </tr>
  </table>
</form>
</body>
</html>

<?php
	if(isset($_GET["log"]))
	{
		$x=$_GET["log"];
		if($x==0)
		{
			echo '<script> alert("Invalid Username"); </script>';	
		}
		else
		{
			echo '<script> alert("Invalid Password"); </script>';	
		}
	}
?>