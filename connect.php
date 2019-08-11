<?php
$host ='localhost';
$username ='root';
$password ='12345678';
$db ='record_db';
mysql_connect($host,$username,$password) or die ('error connect');
mysql_query('set name utf8');
mysql_select_db($db)or die('select error');
?>
