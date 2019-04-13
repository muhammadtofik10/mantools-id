<?php
ini_set('display_errors',0); 
mysql_connect('localhost', 'temix_af', 'GW_M?XBkcZm{');

mysql_select_db('temix_af');

$sql = "insert into spin(username) values ('".$_GET['username']."')"; 
$result = mysql_query($sql);  // This actually executes the query on the server

echo $result;

if(!$sql){ 
	echo "Error " . mysql_error(); }
	else{
	    echo "<br />";
	    echo "Success"; }

	?>