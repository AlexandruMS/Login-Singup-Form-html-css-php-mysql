<?php
$msql=mysql_connect("localhost","root","");
if(!$msql)
{
	echo "nu s-a realizat conectarea la MySQL";
	exit;
}
$baza=mysql_select_db("baza");
if(!$baza)
{
	echo mysql_errno().":".mysql_error();
	exit;
}
$interogare="CREATE TABLE dates(user text,email text, pass text)";
$rezultat=mysql_query($interogare);
if(!$rezultat)
{
	echo mysql_errno().":".mysql_error();
	exit;
}
?>