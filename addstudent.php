<?php
	session_start();
	if(!isset($_SESSION["status"]))
	{
		header("location:index.php");	
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
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
	background-image:url(image/fade.jpg);
	background-position:center;
	background-size:cover;
	background-repeat:no-repeat;
	}
.styled-select {
   background: #FFF;
   height: 30px;
   overflow: hidden;
   width: 100%;
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
input[type=date] {
    width: 100%;
    padding: 5px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
input[type=tel] {
    width: 100%;
    padding: 5px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
input[type=email] {
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
select:focus {
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
  <li><a href="addcourse.php" class="active">Add Student</a></li>
  <li><a href="viewstudent.php">View Student</a></li>
  <li style="float:right"><a href="logout.php">Log Out</a></li>
</ul>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" class="active">Student</a>
  <a href="addfaculty.php">Faculty</a>
  <a href="viewalumni.php">Alumni</a>
  <a href="marks.php">Marks</a>
  <a href="result.php">Result</a>
  <a href="#">Change Password</a>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <a href="logout.php">Log Out</a>
</div>

<div id="main"><span style="font-size:30px;cursor:pointer" onclick="openNav()"><font style="color:#FFF">&#9776;</font></span>
  <form method="post" enctype="multipart/form-data" name="form1" id="form1">
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Student Details</p>


  <table width="50%" border="1" align="center">
    <tr>
      <td><table width="100%" border="0" align="center">
        <tr>
          <td>Batch</td>
          <td height="40">:</td>
          <td><input name="batch" type="text" autofocus required id="batch"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="66">ID</td>
          <td width="4" height="40">:</td>
          <td width="414"><input name="id" type="text" required id="id"></td>
          <td width="80">&nbsp;</td>
          <td width="320">&nbsp;</td>
          </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input name="name" type="text" required id="name"></td>
          <td>&nbsp;</td>
          <td rowspan="4" align="center"><div id="preview"><img src="image/user.png" id="output"/></div>
</td>
        </tr>
        <tr>
          <td>Father's Name</td>
          <td>:</td>
          <td><input name="fname" type="text" required id="fname" style="text-transform: capitalize;"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Date of Birth</td>
          <td>:</td>
          <td><input name="dob" type="date" required id="dob"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="33">Gender</td>
          <td>:</td>
          <td>
            <label class="radio-inline">
            <input name="gender" type="radio" value="Male">Male
            </label>
            <label class="radio-inline">
            <input name="gender" type="radio" value="Female">Female
            </label>
            </td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td><input name="address" type="text" required id="address"></td>
          <td>&nbsp;</td>
          <td><input name="photo" type="file" required class="btn0" id="photo" onChange="loadFile(event)" accept="image/*"></td>
        </tr>
        <tr>
          <td>Blood Group</td>
          <td>:</td>
          <td><select name="blood" required class="styled-select" id="blood">
            <option value="" disabled selected hidden>Select Blood Group</option>
            <option>A-</option>
            <option>A+</option>
            <option>B-</option>
            <option>B+</option>
            <option>AB-</option>
            <option>AB+</option>
            <option>O-</option>
            <option>O+</option>
            <option>Unknown</option>
          </select></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Contact No</td>
          <td>:</td>
          <td><input name="tel" type="tel" required id="tel"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Mail ID</td>
          <td>:</td>
          <td><input name="email" type="email" required id="email"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="24%" border="0" align="center">
    <tr>
      <td align="center"><input name="submit" type="submit" class="button5" id="submit" formaction="addstudentsave.php" value="     Submit    "></td>
      <td align="center"><input name="cancel" type="submit" class="button6" id="cancel" value="    Refresh    " onClick="myFunction()"></td>
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
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

</body>
</html>
<?php
	if(isset($_GET["ok"]))
	{
		echo '<script> alert("Record Saved Successfully"); </script>';	
	}
?>