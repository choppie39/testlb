<?php
	$conn = mysql_connect("localhost", "root", "Shop_2539")or die("Error Connect: " . mysql_error());
	$db = mysql_select_db("testp",$conn)or die*("Database Error :".mysql_error());
	mysql_query("set name utf8");

	$result = mysql_query("select * FROM stock_d")or die("Query error :".mysql_error());
  	$rs = mysql_fetch_array($result);
  	echo $rs["Class"]." ".$rs["Code"].".$rs["Name"];
?>