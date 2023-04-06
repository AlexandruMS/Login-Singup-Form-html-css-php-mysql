<?php
$msql=mysql_connect("localhost","root","");
if(!$msql)
{echo "Nu s-a realizat conectarea la MySQL";
exit;}

$rezultat=mysql_query("CREATE DATABASE baza");
if(!$rezultat)
	echo "Nu s-a realizat crearea bazei de date";
else{
        echo " S-a realizat crearea bazei de date";
        exit();
    }
?>