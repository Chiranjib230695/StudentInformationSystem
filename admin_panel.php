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
<style>
/* ---------- Loader ---------- */
#loader {
    display: block;
  	position: absolute;
    left: 50%;
    top: 50%;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #3498db;

    -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
    animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

    z-index: 1001;
}
    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #e74c3c;

        -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #f9c922;

        -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
          animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }
/*#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  border-bottom: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 1.7s linear infinite;
  animation: spin 1.7s linear infinite;
}*/

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

/*@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}*/

#myDiv {
  display: none;
  text-align: center;
}
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image:url(image/deep%20blue.jpg);
	color:#FFF;
	font-family: "Lato", sans-serif;
    transition: background-color .5s;
	}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

<!--<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
--><form id="form1" name="form1" method="post">
  <p>&nbsp;</p>
  <table width="80%" border="0" align="center">
    <tr>
      <td width="62" align="left"><img src="image/Aasam-agriculture-univeristy-recruitment-2016.png" width="50" height="50"  alt=""/></td>
      <td width="719" height="55" align="left"><font size="5"><span style="color:#FFF">Jorhat Institute of Science &amp; Technology</span></font></td>
      <td width="714" align="right"><font size="5">Student information System</font></td>
      <td width="62" align="right"><a href="logout.php"><img src="image/exit.png" width="45" height="45"  alt=""/></a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="53%" border="1" align="center">
    <tr>
      <td><table width="100%" border="0" align="center">
        <tr align="center">
          <td><a href="addstudent.php"><img class="shadowfilter" src="image/student.png" width="200" height="200"  alt=""/></a></td>
          <td><a href="addfaculty.php"><img class="shadowfilter" src="image/teacher.png" width="200" height="200"  alt=""/></a></td>
          <td><a href="addcourse.php"><img class="shadowfilter" src="image/alumni.png" width="200" height="200"  alt=""/></a></td>
        </tr>
        <tr align="center">
          <td><input name="course3" type="submit" class="button9" id="course3" formaction="addstudent.php" value="        Student        "></td>
          <td><input name="course" type="submit" class="button9" id="course" formaction="addfaculty.php" value="        Faculty         "></td>
          <td><input name="course2" type="submit" class="button9" id="course2" formaction="addcourse.php" value="         Alumni         "></td>
        </tr>
        <tr align="center">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr align="center">
          <td width="33%"><a href="markschoose.php"><img class="shadowfilter" src="image/text.png" width="230" height="200"  alt=""/></a></td>
          <td width="33%"><a href="results.php"><img class="shadowfilter" src="image/25089-200.png" width="200" height="200"  alt=""/></a></td>
          <td width="33%"><a href="changepassword.php"><img class="shadowfilter" src="image/228849-200.png" width="200" height="200"  alt=""/></a></td>
          <!--      <td width="200"><a href="registrationadmin.php"><img class="shadowfilter" src="image/edit-icon-16.png" width="175" height="200"  alt=""/></a></td>
-->
        </tr>
        <tr align="center">
          <td><input name="marks" type="submit" class="button9" id="marks" formaction="markschoose.php" value="         Marks         "></td>
          <td><input name="submit" type="submit" class="button9" id="submit" formaction="results.php" value="         Result         "></td>
          <td><input name="password" type="submit" class="button9" id="password" formaction="changepassword.php" value="Change Password"></td>
          <!--      <td><input name="result2" type="submit" class="button9" id="result2" formaction="registrationadmin.php" value="        Register       "></td>
-->
        </tr>
      </table></td>
    </tr>
  </table>
</form></div>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>