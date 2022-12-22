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
select:focus {
    border: 3px solid #3C3;
}
.styled-select {
   background: #FFF;
   height: 30px;
   overflow: hidden;
   border: 3px solid #ccc;
   width: 100%;
}
.styled-select2 {
   background: #FFF;
   height: 30px;
   overflow: hidden;
   border: 3px solid #ccc;
   width: 200px;
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
	font-size: 24;
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
<script src="jquery.js"></script>
<script>
function addMore() {
	$("<DIV>").load("input1.php", function() {
			$("#product").append($(this).html());
	});
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</script>

</head>

<body>
<ul>
  <li><a href="admin_panel.php">Home</a></li>
  <li><a href="marks.php">Select Degree</a></li>
  <li><a href="#" class="active">Insert Marks</a></li>
  <li style="float:right"><a href="logout.php">Log Out</a></li>
</ul>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin_panel.php">Home</a>
  <a href="addcourse.php">Course</a>
  <a class="active" href="marks.php">Marks</a>
  <a href="results.php">Result</a>
  <a href="registrationadmin.php">Register</a>
  <a href="changepassword.php">Change Password</a>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <a href="logout.php">Log Out</a>
</div>

<div id="main"><span style="font-size:30px;cursor:pointer" onclick="openNav()"><font style="color:#FFF">&#9776;</font></span></div>
  <form id="form1" name="form1" method="post">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="50%" border="0" align="center">
  <tr>
    <td height="80"><input name="1stsem" type="submit" class="button6" id="1stsem" value="  First Semester "></td>
    <td><input name="2ndsem" type="submit" class="button6" id="2ndsem" formaction="marks2.php" value="Second Semester"></td>
  </tr>
  <tr>
    <td height="80"><input name="3rdsem" type="submit" class="button6" id="3rdsem" value=" Third Semester "></td>
    <td><input name="4thsem" type="submit" class="button6" id="4thsem" value="Fourth Semester"></td>
  </tr>
  <tr>
    <td height="80"><input name="5thsem" type="submit" class="button6" id="5thsem" value="  Fifth Semester "></td>
    <td><input name="6thsem" type="submit" class="button6" id="6thsem" formaction="marks6.php" value="  Sixth Semester  "></td>
  </tr>
</table>

  </form>

</body>
</html>
<?php
	if(isset($_GET["ok"]))
	{
		echo '<script> alert("Saved Successfully"); </script>';	
	}
?>