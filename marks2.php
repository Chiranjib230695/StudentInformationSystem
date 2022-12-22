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
          <td><input name="sem" type="text" required id="sem" value="2nd Semester" readonly="readonly"></td>
        </tr>
    </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>


                                <!-- 2nd Semester -->

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
      <input name="submit" type="submit" class="button5" id="submit" form="form1" formaction="markssave2sem.php" value="Submit">
    </div></td>
    <td colspan="3" align="center"><div align="left">
      <input name="cancel" type="submit" class="button6" id="cancel" form="form2" value="Refresh" onClick="myFunction()">
    </div>
    </td>
    </tr>
</table>
    </form>
    <form method="post" id="form2"></form>
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