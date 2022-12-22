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

<div id="main"><span style="font-size:30px;cursor:pointer" onclick="openNav()"><font style="color:#FFF">&#9776;</font></span>
  <form id="form1" name="form1" method="post">
  <p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Student Details</p>
  <table width="50%" border="1" align="center">
    <tr>
      <td width="100%"><table width="885" border="0" align="center">
        <tr>
          <td width="100">Roll No</td>
          <td width="10">:</td>
          <td width="1000"><input name="roll" type="text" autofocus required id="roll"></td>
          <td width="4%">&nbsp;</td>
          <td width="100">Name</td>
          <td width="10">&nbsp;</td>
          <td width="1000"><input name="name" type="text" required id="name"></td>
        </tr>
        <tr>
          <td><p>Batch</p></td>
          <td>:</td>
          <td><input name="batch" type="text" required id="batch"></td>
          <td>&nbsp;</td>
          <td>Semester</td>
          <td>:</td>
          <td>
        <select name="sem" class="styled-select" required id="sem" onchange = "ShowHideDiv()">
          <option value="" disabled selected hidden>Select Semester</option>
          <option value="sem1">1st Semester</option>
          <option value="sem2">2nd Semester</option>
          <option value="sem3">3rd Semester</option>
          <option value="sem4">4th Semester</option>
          <option value="sem5">5th Semester</option>
          <option value="sem6">6th Semester</option>
        </select>
		</td>
        </tr>
    </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>

<table width="100%" border="0">
  <tr>
    <td><td>
<div class="group">      
<div id="sem1" style="display: none">
<table width="50%" border="0" align="center">
      <tr>
        <td colspan="6"><p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">First Semester Marks</p>
</td>
      </tr>

  <tr align="center" height="50px" style="font-weight:bold; font-size:16px" bgcolor="#333333">
    <td>Subject/Course Code</td>
    <td>Subject/Course Title</td>
    <td>Maximum Marks</td>
    <td>Pass Marks</td>
    <td>Marks Awarded</td>
    <td>Sub Total</td>
  </tr>
  <tr>
    <td align="center">Paper - 1.1</td>
    <td>Computer Programming &amp; Problem Solving (Theory)</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="cppst" type="text" required id="cppst" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="cppse" type="text" required id="cppse"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="cppsi" type="text" id="cppsi" onKeyUp="sem1stcpps(); sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="cppstp" type="text" id="cppstp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="cppsep" type="text" id="cppsep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="cppsip" type="text" id="cppsip" onKeyUp="sem1stcppsp(); sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 1.2</td>
    <td>Basic Electronics (Theory)</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="bet" type="text" id="bet"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="bee" type="text" id="bee"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="bei" type="text" id="bei"  onKeyUp="sem1stbe(); sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="betp" type="text" id="betp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="beep" type="text" id="beep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="beip" type="text" id="beip" onKeyUp="sem1stbep(); sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 1.3</td>
    <td>Mathematics - I</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="m1t" type="text" id="m1t"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="m1e" type="text" id="m1e"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="m1i" type="text" id="m1i" onKeyUp="sem1stm1(); sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 1.4</td>
    <td>Humanities - I</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="h1t" type="text" id="h1t"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="h1e" type="text" id="h1e"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="h1i" type="text" id="h1i" onKeyUp="sem1sth1(); sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 1.5</td>
    <td>Foundation of IT</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="ft" type="text" id="ft"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="fe" type="text" id="fe"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="fi" type="text" id="fi" onKeyUp="sem1stf(); sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 1.6</td>
    <td>Environmental Studies (#)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="et" type="text" id="et" onKeyUp="sem1sttot()"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">Total</td>
    <td align="center">700</td>
    <td align="center">350</td>
    <td><input name="sem1tot" type="text" id="sem1tot" onKeyPress="sem1sttot()"></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3"><div align="right">
      <input name="submit" type="submit" class="button5" id="submit" form="form1" formaction="markssave1sem.php" value="Submit">
    </div></td>
    <td colspan="3" align="center"><div align="left">
      <input name="cancel" type="submit" class="button6" id="cancel" form="form2" value="Refresh" onClick="myFunction()">
    </div>
    </td>
    </tr>

</table>
</div>

                                <!-- 2nd Semester -->

<div id="sem2" style="display: none">
<table width="50%" border="0" align="center">
      <tr>
        <td colspan="6"><p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Second Semester Marks</p>
</td>
      </tr>

  <tr align="center" height="50px" style="font-weight:bold; font-size:16px" bgcolor="#333333">
    <td>Subject/Course Code</td>
    <td>Subject/Course Title</td>
    <td>Maximum Marks</td>
    <td>Pass Marks</td>
    <td>Marks Awarded</td>
    <td>Sub Total</td>
  </tr>
  <tr>
    <td align="center">Paper - 2.1</td>
    <td>Data Structure(Theory)</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="dst" type="text" id="dst" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="dse" type="text" id="dse"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dsi" type="text" id="dsi" onKeyUp="sem2ndds(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="dstp" type="text" id="dstp" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="dsep" type="text" id="dsep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dsip" type="text" id="dsip" onKeyUp="sem2nddsp(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 2.2</td>
    <td>Mathematics - II</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="m2t" type="text" id="m2t" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="m2e" type="text" id="m2e"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="m2i" type="text" id="m2i"onKeyUp="sem2ndm2(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    
  <tr>
    <td align="center">Paper - 2.3</td>
    <td>Theoretical Foundation of Computer Science</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="tfcst" type="text" id="tfcst" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="tfcse" type="text" id="tfcse"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="tfcsi" type="text" id="tfcsi" onKeyUp="sem2ndtfcs(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 2.4</td>
    <td>Digital Circuits and Logic Design (Theory)</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="dcldt" type="text" id="dcldt" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="dclde" type="text" id="dclde"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dcldi" type="text" id="dcldi" onKeyUp="sem2nddcld(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="dcldtp" type="text" id="dcldtp" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="dcldep" type="text" id="dcldep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dcldip" type="text" id="dcldip" onKeyUp="sem2nddcldp(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 2.5</td>
    <td>Digital Communication (Theory)</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="dct" type="text" id="dct" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="dce" type="text" id="dce"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dci" type="text" id="dci" onKeyUp="sem2nddc(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="dctp" type="text" id="dctp" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="dcep" type="text" id="dcep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dcip" type="text" id="dcip" onKeyUp="sem2nddcp(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td align="center">Parer - 2.6</td>
    <td>Humanities - II</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="h2t" type="text" id="h2t" readonly></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="h2e" type="text" id="h2e"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="h2i" type="text" id="h2i" onKeyUp="sem2ndhum2(); sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">Total</td>
    <td align="center">900</td>
    <td align="center">450</td>
    <td><input name="sem2tot" type="text" id="sem2tot" readonly onKeyPress="sem2ndtot()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">
      <input name="submit" type="submit" class="button5" id="submit" form="form2sem" formaction="markssave2sem.php" value="Submit">
    </div></td>
    <td colspan="3" align="center"><div align="left">
      <input name="cancel" type="submit" class="button6" id="cancel" form="form2" value="Refresh" onClick="myFunction()">
    </div>
    </td>
    </tr>
</table>
</div>
<div id="sem3" style="display: none">
<table width="50%" border="0" align="center">
      <tr>
        <td colspan="6"><p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Third Semester Marks</p>
</td>
      </tr>

  <tr align="center" height="50px" style="font-weight:bold; font-size:16px" bgcolor="#333333">
    <td>Subject/Course Code</td>
    <td>Subject/Course Title</td>
    <td>Maximum Marks</td>
    <td>Pass Marks</td>
    <td>Marks Awarded</td>
    <td>Sub Total</td>
  </tr>
  <tr>
    <td align="center">Paper - 3.1</td>
    <td>Computer Organization</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="cot" type="text" id="cot"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="coe" type="text" id="coe"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="coi" type="text" id="coi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 3.2</td>
    <td>System Progarmming</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="spt" type="text" id="spt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="spe" type="text" id="spe"></td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="spi" type="text" id="spi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="sptp" type="text" id="sptp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="spep" type="text" id="spep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="spip" type="text" id="spip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 3.3</td>
    <td>Computer Networking</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="cnt" type="text" id="cnt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="cne" type="text" id="cne"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="cni" type="text" id="cni"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="cntp" type="text" id="cntp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="cnep" type="text" id="cnep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="cnip" type="text" id="cnip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 3.4</td>
    <td>Object Oriented Programming and Design</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="oopdt" type="text" id="oopdt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="oopde" type="text" id="oopde"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="oopdi" type="text" id="oopdi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="oopdtp" type="text" id="oopdtp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="oopdep" type="text" id="oopdep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="oopdip" type="text" id="oopdip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 3.5</td>
    <td>Mathematics - III</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="m3t" type="text" id="m3t"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="m3e" type="text" id="m3e"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="m3i" type="text" id="m3i"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">Total</td>
    <td align="center">800</td>
    <td align="center">400</td>
    <td><input name="sem3tot" type="text" id="sem3tot"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">
      <input name="submit" type="submit" class="button5" id="submit" form="form1" formaction="markssave3sem.php" value="Submit">
    </div></td>
    <td colspan="3" align="center"><div align="left">
      <input name="cancel" type="submit" class="button6" id="cancel" form="form2" value="Refresh" onClick="myFunction()">
    </div>
    </td>
    </tr>
</table>
</div>
<div id="sem4" style="display: none">
<table width="50%" border="0" align="center">
      <tr>
        <td colspan="6"><p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Fourth Semester Marks</p>
</td>
      </tr>

  <tr align="center" height="50px" style="font-weight:bold; font-size:16px" bgcolor="#333333">
    <td>Subject/Course Code</td>
    <td>Subject/Course Title</td>
    <td>Maximum Marks</td>
    <td>Pass Marks</td>
    <td>Marks Awarded</td>
    <td>Sub Total</td>
  </tr>
  <tr>
    <td align="center">Paper - 4.1</td>
    <td>Database Managment System</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="dbmst" type="text" id="dbmst"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="dbmse" type="text" id="dbmse"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dbmsi" type="text" id="dbmsi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="dbmstp" type="text" id="dbmstp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="dbmsep" type="text" id="dbmsep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="dbmsip" type="text" id="dbmsip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 4.2</td>
    <td>Operating System</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="ost" type="text" id="ost"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="ose" type="text" id="ose"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="osi" type="text" id="osi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 4.3</td>
    <td>Financial Managment and Accounting</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="fmact" type="text" id="fmact"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="fmace" type="text" id="fmace"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="fmaci" type="text" id="fmaci"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 4.4</td>
    <td>Software Engineering</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="set" type="text" id="set"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="see" type="text" id="see"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="sei" type="text" id="sei"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 4.5</td>
    <td>Computer Graphics</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="cgt" type="text" id="cgt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="cge" type="text" id="cge"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="cgi" type="text" id="cgi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="cgtp" type="text" id="cgtp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="cgep" type="text" id="cgep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="cgip" type="text" id="cgip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 4.6</td>
    <td>Minor Project</td>
    <td align="center">200</td>
    <td align="center">100</td>
    <td>&nbsp;</td>
    <td><input name="mpt" type="text" id="mpt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Report</td>
    <td align="center">50</td>
    <td align="center">-</td>
    <td><input name="mpr" type="text" id="mpr"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Presentation</td>
    <td align="center">50</td>
    <td align="center">-</td>
    <td><input name="mpp" type="text" id="mpp"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Project</td>
    <td align="center">100</td>
    <td align="center">-</td>
    <td><input name="mppro" type="text" id="mppro"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">Total</td>
    <td align="center">900</td>
    <td align="center">450</td>
    <td><input name="sem4tot" type="text" id="sem4tot"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">
      <input name="submit" type="submit" class="button5" id="submit" form="form1" formaction="markssave4sem.php" value="Submit">
    </div></td>
    <td colspan="3" align="center"><div align="left">
      <input name="cancel" type="submit" class="button6" id="cancel" form="form2" value="Refresh" onClick="myFunction()">
    </div>
    </td>
    </tr>
</table>
</div>
<div id="sem5" style="display: none">
<table width="50%" border="0" align="center">
      <tr>
        <td colspan="6"><p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Fifth Semester Marks</p>
</td>
      </tr>

  <tr align="center" height="50px" style="font-weight:bold; font-size:16px" bgcolor="#333333">
    <td>Subject/Course Code</td>
    <td>Subject/Course Title</td>
    <td>Maximum Marks</td>
    <td>Pass Marks</td>
    <td>Marks Awarded</td>
    <td>Sub Total</td>
  </tr>
  <tr>
    <td align="center">Paper - 5.1</td>
    <td>Web Technology</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="wtt" type="text" id="wtt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="wte" type="text" id="wte"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="wti" type="text" id="wti"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="wttp" type="text" id="wttp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="wtep" type="text" id="wtep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="wtip" type="text" id="wtip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 5.2</td>
    <td>Embedded Design</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="edt" type="text" id="edt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="ede" type="text" id="ede"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="edi" type="text" id="edi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="edtp" type="text" id="edtp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="edep" type="text" id="edep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="edip" type="text" id="edip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 5.3</td>
    <td>Multimedia System</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="mst" type="text" id="mst"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="mse" type="text" id="mse"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="msi" type="text" id="msi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 5.4</td>
    <td>Artificial Intelligence</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="ait" type="text" id="ait"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="aie" type="text" id="aie"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="aii" type="text" id="aii"></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Practical</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td>&nbsp;</td>
    <td><input name="aitp" type="text" id="aitp"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">37.5</td>
    <td><input name="aiep" type="text" id="aiep"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="aiip" type="text" id="aiip"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 5.5</td>
    <td>Elective-I (Network Security)</td>
    <td align="center">100</td>
    <td align="center">42.5</td>
    <td>&nbsp;</td>
    <td><input name="nst" type="text" id="nst"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="nse" type="text" id="nse"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="nsi" type="text" id="nsi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Paper - 5.6</td>
    <td>Elective-II (Software Quality Management)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="sqmt" type="text" id="sqmt"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>End Semester</td>
    <td align="center">75</td>
    <td align="center">30</td>
    <td><input name="sqme" type="text" id="sqme"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>In Semester</td>
    <td align="center">25</td>
    <td align="center">12.5</td>
    <td><input name="sqmi" type="text" id="sqmi"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">Total</td>
    <td align="center">900</td>
    <td align="center">450</td>
    <td><input name="sem5tot" type="text" id="sem5tot"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">
      <input name="submit" type="submit" class="button5" id="submit" form="form1" formaction="markssave5sem.php" value="Submit">
    </div></td>
    <td colspan="3" align="center"><div align="left">
      <input name="cancel" type="submit" class="button6" id="cancel" form="form2" value="Refresh" onClick="myFunction()">
    </div>
    </td>
    </tr>
</table>
</div>
<div id="sem6" style="display: none">
<table width="50%" border="0" align="center">
      <tr>
        <td colspan="6"><p style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Six Semester Marks</p>
</td>
      </tr>

  <tr align="center" height="50px" style="font-weight:bold; font-size:16px" bgcolor="#333333">
    <td>Subject/Course Code</td>
    <td>Subject/Course Title</td>
    <td>Maximum Marks</td>
    <td>Pass Marks</td>
    <td>Marks Awarded</td>
    <td>Sub Total</td>
  </tr>
  <tr>
    <td align="center">Paper - 6.1</td>
    <td>Major Project</td>
    <td align="center"><div align="center">-</div></td>
    <td align="center"><div align="center">-</div></td>
    <td><div align="center">-</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Project</td>
    <td align="center">500</td>
    <td align="center">250</td>
    <td><input name="mp" type="text" id="mp"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Seminar</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td><input name="ms" type="text" id="ms"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Viva</td>
    <td align="center">100</td>
    <td align="center">50</td>
    <td><input name="mv" type="text" id="mv" onKeyUp="sum()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">Total</td>
    <td align="center">700</td>
    <td align="center">350</td>
    <td><input name="sem6tot" type="text" id="sem6tot"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">
      <input name="submit" type="submit" class="button5" id="submit" form="form6sem" formaction="markssave6sem.php" value="Submit">
    </div></td>
    <td colspan="3" align="center"><div align="left">
      <input name="cancel" type="submit" class="button6" id="cancel" form="form2" value="Refresh" onClick="myFunction()">
    </div>
    </td>
    </tr>
    
</table>
    </form>
    <form method="post" id="form2"></form>
    <form method="post" id="form6sem"></form>
    <form method="post" id="form2sem"></form>

</div>
<script>
    function sum() {
       var txtFirstNumberValue = document.getElementById('mp').value;
       var txtSecondNumberValue = document.getElementById('ms').value;
       var txt3rdNumberValue = document.getElementById('mv').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;
       if (txt3rdNumberValue == "")
           txt3rdNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txt3rdNumberValue);
       if (!isNaN(result)) {
           document.getElementById('sem6tot').value = result;
       }
   }
</script>
<script>
    function sem1stcpps() {
       var txtFirstNumberValue = document.getElementById('cppse').value;
       var txtSecondNumberValue = document.getElementById('cppsi').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('cppst').value = result;
       }
   }
</script>
<script>
    function sem1stcppsp() {
       var txtFirstNumberValue = document.getElementById('cppsep').value;
       var txtSecondNumberValue = document.getElementById('cppsip').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('cppstp').value = result;
       }
   }
</script>
<script>
    function sem1stbe() {
       var txtFirstNumberValue = document.getElementById('bee').value;
       var txtSecondNumberValue = document.getElementById('bei').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('bet').value = result;
       }
   }
</script>
<script>
    function sem1stbep() {
       var txtFirstNumberValue = document.getElementById('beep').value;
       var txtSecondNumberValue = document.getElementById('beip').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('betp').value = result;
       }
   }
</script>
<script>
    function sem1stm1() {
       var txtFirstNumberValue = document.getElementById('m1e').value;
       var txtSecondNumberValue = document.getElementById('m1i').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('m1t').value = result;
       }
   }
</script>
<script>
    function sem1sth1() {
       var txtFirstNumberValue = document.getElementById('h1e').value;
       var txtSecondNumberValue = document.getElementById('h1i').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('h1t').value = result;
       }
   }
</script>
<script>
    function sem1stf() {
       var txtFirstNumberValue = document.getElementById('fe').value;
       var txtSecondNumberValue = document.getElementById('fi').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('ft').value = result;
       }
   }
</script>
<script>
    function sem1sttot() {
       var txtFirstNumberValue = document.getElementById('cppst').value;
       var txtSecondNumberValue = document.getElementById('cppstp').value;
       var txtThirdNumberValue = document.getElementById('bet').value;
       var txtFourthNumberValue = document.getElementById('betp').value;
       var txtFifthNumberValue = document.getElementById('m1t').value;
       var txtSixthNumberValue = document.getElementById('h1t').value;
       var txtSeventhNumberValue = document.getElementById('ft').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;
       if (txtThirdNumberValue == "")
           txtThirdNumberValue = 0;
       if (txtFourthNumberValue == "")
           txtFourthNumberValue = 0;
       if (txtFifthNumberValue == "")
           txtFifthNumberValue = 0;
       if (txtSixthNumberValue == "")
           txtSixthNumberValue = 0;
       if (txtSeventhNumberValue == "")
           txtSeventhNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txtThirdNumberValue) + parseInt(txtFourthNumberValue) + parseInt(txtFifthNumberValue) + parseInt(txtSixthNumberValue) + parseInt(txtSeventhNumberValue);
       if (!isNaN(result)) {
           document.getElementById('sem1tot').value = result;
       }
   }
</script>

		<!-- 2nd Semester-->
<script>
    function sem2ndds() {
       var txtFirstNumberValue = document.getElementById('dse').value;
       var txtSecondNumberValue = document.getElementById('dsi').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('dst').value = result;
       }
   }
</script>
<script>
    function sem2nddsp() {
       var txtFirstNumberValue = document.getElementById('dsep').value;
       var txtSecondNumberValue = document.getElementById('dsip').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('dstp').value = result;
       }
   }
</script>
<script>
    function sem2ndm2() {
       var txtFirstNumberValue = document.getElementById('m2e').value;
       var txtSecondNumberValue = document.getElementById('m2i').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('m2t').value = result;
       }
   }
</script>
<script>
    function sem2ndtfcs() {
       var txtFirstNumberValue = document.getElementById('tfcse').value;
       var txtSecondNumberValue = document.getElementById('tfcsi').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('tfcst').value = result;
       }
   }
</script>
<script>
    function sem2nddcld() {
       var txtFirstNumberValue = document.getElementById('dclde').value;
       var txtSecondNumberValue = document.getElementById('dcldi').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('dcldt').value = result;
       }
   }
</script>
<script>
    function sem2nddcldp() {
       var txtFirstNumberValue = document.getElementById('dcldep').value;
       var txtSecondNumberValue = document.getElementById('dcldip').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('dcldtp').value = result;
       }
   }
</script>
<script>
    function sem2nddc() {
       var txtFirstNumberValue = document.getElementById('dce').value;
       var txtSecondNumberValue = document.getElementById('dci').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('dct').value = result;
       }
   }
</script>
<script>
    function sem2nddcp() {
       var txtFirstNumberValue = document.getElementById('dcep').value;
       var txtSecondNumberValue = document.getElementById('dcip').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('dctp').value = result;
       }
   }
</script>
<script>
    function sem2ndhum2() {
       var txtFirstNumberValue = document.getElementById('h2e').value;
       var txtSecondNumberValue = document.getElementById('h2i').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('h2t').value = result;
       }
   }
</script>
<script>
    function sem2ndtot() {
       var txtFirstNumberValue = document.getElementById('dst').value;
       var txtSecondNumberValue = document.getElementById('dstp').value;
       var txtThirdNumberValue = document.getElementById('m2t').value;
       var txtFourthNumberValue = document.getElementById('tfcst').value;
       var txtFifthNumberValue = document.getElementById('dcldt').value;
       var txtSixthNumberValue = document.getElementById('dcldtp').value;
       var txtSeventhNumberValue = document.getElementById('dct').value;
       var txtEighthNumberValue = document.getElementById('dctp').value;
       var txtNinthNumberValue = document.getElementById('h2t').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;
       if (txtThirdNumberValue == "")
           txtThirdNumberValue = 0;
       if (txtFourthNumberValue == "")
           txtFourthNumberValue = 0;
       if (txtFifthNumberValue == "")
           txtFifthNumberValue = 0;
       if (txtSixthNumberValue == "")
           txtSixthNumberValue = 0;
       if (txtSeventhNumberValue == "")
           txtSeventhNumberValue = 0;
	   if (txtEighthNumberValue == "")
           txtEighthNumberValue = 0;
	   if (txtNinthNumberValue == "")
           txtNinthNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txtThirdNumberValue) + parseInt(txtFourthNumberValue) + parseInt(txtFifthNumberValue) + parseInt(txtSixthNumberValue) + parseInt(txtSeventhNumberValue) + parseInt(txtEighthNumberValue) + parseInt(txtNinthNumberValue);
       
	   if (!isNaN(result))
	   {
           document.getElementById('sem2tot').value = result;
       }
   }
</script>

<script type="text/javascript">
    function ShowHideDiv() {
        var category = document.getElementById("sem");
//      var roll = document.getElementById("roll");
//		var designation = document.getElementById("designation");
        sem1.style.display = category.value == "sem1" ? "block" : "none";
		sem2.style.display = category.value == "sem2" ? "block" : "none";
		sem3.style.display = category.value == "sem3" ? "block" : "none";
		sem4.style.display = category.value == "sem4" ? "block" : "none";
		sem5.style.display = category.value == "sem5" ? "block" : "none";
		sem6.style.display = category.value == "sem6" ? "block" : "none";
    }
</script>

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

<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js" type="text/javascript"></script>
</body>
</html>
<?php
	if(isset($_GET["ok"]))
	{
		echo '<script> alert("Saved Successfully"); </script>';	
	}
?>