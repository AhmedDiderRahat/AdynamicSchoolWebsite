<?php

$dbhost = 'localhost';
$dbname = 'cse425';
$dbuser = 'root';
$dbpass = '';

$ms = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$ms)
{
	echo "Error in connection";
}
else
{
	//echo "connected...!!!<br>";
}

//$quary = "select * from result;";
/*$quary = "select * from index;";

$result = mysqli_query($ms, $quary);
//echo $result;

$row = mysqli_fetch_array($result);

echo $row['about/news'];

$close = mysqli_close($ms);

if($close)
	echo $close;

//mysql_select_db();
*/
?>
