<?php
$host='localhost';
$user='root';
$pass='';

$dbase= 'online_shop';

mysql_connect($host, $user, $pass);
mysql_select_db($dbase);
/*if(!@mysql_connect($host, $user, $pass) || !@mysql_select_db($dbase)){
   die ('could not connect');*/
?>