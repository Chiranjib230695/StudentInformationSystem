<?php
	session_start();
	if(!isset($_SESSION["status"]))
	{
		header("location:index.php");	
	}
?>
<?php
	include "connect.php";
	if(isset($_POST["submit"]))
	{
		$fid=$_GET['dc'];
		$fname=$_POST["fname"];
		
		$sql="update faculty set fname='$fname' where fid='$fid'";
	if(mysql_query($sql,$link))
	{
		header('location:viewfaculty.php?ok=1');
			
	}
	else
	{
		echo mysql_error();	
	}
	}
?>              

<?php
	include "connect.php";
	if(isset($_GET["dc"]));
	{
	$code=$_GET["dc"];
	$sql="Select * from faculty where fid='$code'";
	$result=mysql_query($sql,$link);
	$row=mysql_fetch_assoc($result); 
	}
?>
<!doctype html>
<html>
<link href="style.css" type="text/css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image:url(image/deep%20blue.jpg);
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
	}
.styled-select {
   background: #FFF;
   height: 30px;
   overflow: hidden;
   width: 180px;
}

input[type=text] {
    width: 100%;
    padding: 5px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #3C3;
}
</style>
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
	background-color:#3C3;
    color: white;
	font-size:20px;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
	transition: margin-left .5s;
	padding: 16px;
	color: #FFF;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.active {
    background-color:#CCC;
    color: white;
}

</style>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #3C3;
}
</style>

</head>

<body>
<ul>
  <li><a href="admin_panel.php">Home</a></li>
  <li><a href="addcourse.php">Add New Course</a></li>
  <li><a href="addfaculty.php" class="active">Add New Faculty</a></li>
  <li><a href="viewfaculty.php">View Faculty</a></li>
  <li><a href="viewcourse.php">View Course</a></li>
  <li style="float:right"><a href="logout.php">Log Out</a></li>
</ul>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin_panel.php">Home</a>
  <a class="active" href="addcourse.php">Course</a>
  <a href="marks.php">Marks</a>
  <a href="results.php">Result</a>
  <a href="registrationadmin.php">Register</a>
  <a href="changepassword.php">Change Password</a>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <a href="logout.php">Log Out</a>
</div>

<div id="main"><span style="font-size:30px;cursor:pointer" onclick="openNav()"><font style="color:#FFF">&#9776;</font></span>
  <form id="form1" name="form1" method="post">
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Add Faculty</p>


  <table width="200" border="1" align="center">
    <tr>
      <td><table width="600" border="0" align="center">
        <tr>
          <td width="130">Faculty Name :</td>
          <td width="620" colspan="5"><input name="fname" type="text" autofocus required id="fname" style="text-transform: capitalize;" value="<?php echo $row["fname"];?>"></td>
        </tr>
        </table></td>
    </tr>
  </table>
  <table width="24%" border="0" align="center">
    <tr>
      <td align="center"><input name="submit" type="submit" class="button5" id="submit"value="   Update  "></td>
      <td align="center"><input name="cancel" type="submit" class="button7" id="cancel" value="   Cancel   " formaction="viewfaculty.php"></td>
    </tr>
  </table>
  </form>

</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
<script>
function myFunction() {
    location.reload();
}
</script>
</body>
</html>
<?php
	if(isset($_GET["ok"]))
	{
		echo '<script> alert("Record Updated Successfully"); </script>';	
	}
?>