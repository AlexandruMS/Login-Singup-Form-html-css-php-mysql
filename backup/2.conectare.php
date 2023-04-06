<?php
$msql=mysql_connect("localhost","root","");
if(!$msql){
	echo "Nu s-a realizat conectarea la MySQL";
	exit;
	
}
else{
        echo " S-a realizat conectarea la MySQL";
        exit();
    }
$baza=mysql_select_db("baza");
if(!$baza)
{
	echo mysql_errno().":".mysql_error();
	exit;
}

?>