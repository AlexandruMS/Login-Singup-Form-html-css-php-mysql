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
$interogare="CREATE TABLE bazadate(nume text,grupa text,parola text)";
$rezultat=mysql_query($interogare);
if(!$rezultat)
{
	echo mysql_errno().":".mysql_error();
	exit;
}
?>