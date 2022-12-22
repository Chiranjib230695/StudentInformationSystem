<?php
	$link=@mysql_connect("localhost","root","") or die("Can not connect to mysql");
	mysql_select_db("sis",$link) or die("Can not connect to database");
?>