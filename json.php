<?php
include "db.php";
include "php_encode.php";
$data=array();
$q=mysql_query("select * from course_details;");

while ($row=mysql_fetch_object($q))
{
	$data[]=$row;
}
echo __json_encode($data);
?>
