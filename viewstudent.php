<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
--><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
	background-image:url(image/deep%20blue.jpg);
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
	font-size:20px;
    color: white;
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

table {
  overflow: hidden;
}

td, th {
	padding: 10px;
	position: relative;
	outline: 0;
	font-size: 16px;
}

body:not(.nohover) tbody tr:hover {
/*  background-color: #ffa;
*/  color:#fff;
}

td:hover::after,
thead th:not(:empty):hover::after,
td:focus::after,
thead th:not(:empty):focus::after { 
  content: '';  
  height: 10000px;
  left: 0;
  position: absolute;  
  top: -5000px;
  width: 100%;
  z-index: -1;
}

td:focus::before,
tbody th:focus::before {
  background-color: lightblue;
  content: '';  
  height: 100%;
  top: 0;
  left: -5000px;
  position: absolute;  
  width: 10000px;
  z-index: -1;
}
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	/* Define the hover highlight color for the table row */
    .hoverTable tr:hover {
          background-color:#4CAF50;
    }

</style>
<!--<link rel="stylesheet" href="bootstrap.min.css">
--><link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style300.css">

</head>

<body>
<ul>
  <li><a href="admin_panel.php">Home</a></li>
  <li><a href="addstudent.php">Add Student</a></li>
  <li><a href="viewfaculty.php" class="active">View Faculty</a></li>
  <li style="float:right"><a href="logout.php">Log Out</a></li>
</ul>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active" href="addstudent.php">Student</a>
  <a href="marks.php">Marks</a>
  <a href="viewalumni.php">Alumni</a>
  <a href="result.php">Result</a>
  <a href="changepassword.php">Change Password</a>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <a href="logout.php">Log Out</a>
</div>

<div id="main"><span style="font-size:30px;cursor:pointer" onclick="openNav()"><font style="color:#FFF">&#9776;</font></span>

<form id="form1" name="form1" method="post">
<table width="100%" border="0" align="center">
<tr align="left">
<td width="11%" style="font-size:24px">&nbsp;</td>
<td width="9%" style="font-size:24px">Search By :</td>
<td><input name="search" type="text" id="search" placeholder="Name" class="form-control"></td>
<td width="8%"><input name="submit" type="submit" class="button2" id="submit" value="Search"></td>
<td width="8%" align="center"><input name="submit2" type="submit" class="button2" id="submit2" onClick="myFunction()" value="Refresh"></td>
<td width="11%" align="center">&nbsp;</td>
</tr>
</table>    
<section> <!--for demo wrap-->
<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
   <tr>
     <th width="200" style="color:#0FF"><font size="5" style="color: #0FF">BATCH</font></th>
     <th width="200" class="col"style="color:#0FF"><font size="5">ID</font></th>
     <th width="200" class="col"style="color:#0FF"><font size="5">NAME</font></th>
     <th width="200" class="col"style="color:#0FF"><font size="5">CONTACT</font></th>
     <th width="200" class="col"style="color:#0FF"><font size="5">EMAIL</font></th>
     <th width="200" class="col"style="color:#0FF"><font size="5">ACTION</font></th>
   </tr>
  </thead>
</table>

</div>
<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0" align="center" class="hoverTable">
  <tbody>
<?php
include "connect.php";
if(isset($_POST["submit"]))
{
	$key_word=$_POST['search'];
	$sql="select * from student where name like '$key_word%'";	

}
		else
		{
			$sql="Select * from student order by batch desc";
		}
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<tr onClick="selectrow(this)">';
			echo '<td>'.$row["batch"].'</td>';
			echo '<td>'.$row["id"].'</td>';
			echo '<td>'.$row["name"].'</td>';
			echo '<td>'.$row["contact"].'</td>';
			echo '<td>'.$row["email"].'</td>';
			echo '<td align="center"><a href="#.php?dc='.$row["id"].'" class="button editbutton"><img src="image/edit.png" width="15" height="15"  alt=""/></a>&nbsp;<a href="deletestudent.php?id='.$row["id"].'" class="button delbutton" onClick="return condel();"><img src="image/delete.png" width="15" height="15"  alt=""/></a></td>';
			echo '</tr>';
		}
	
?>
  
  </tbody>
</table>
</div>
</section>

</form>
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
</script><script>
function myFunction() {
    location.reload();
}
</script>
</body>
</html>
<script type="text/javascript">
function condel()
{
	return confirm("Do you want to delete this data !");
}
</script>
<script>
function selectrow(x) {
    alert("Row index is: " + x.rowIndex);
}
</script>
<?php
if(isset($_GET["ok"]))
echo '<script alert("Delete Successful"); </script>';
?>