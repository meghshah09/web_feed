<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$post = $_GET["post"]; $sub =$_GET["subject"]; $flag=1;

$myconnection = mysqli_connect ("mysql.hostinger.in","u892369421_megh","123456","u892369421_cloud") or die ("could not connect to mysql"); 
$dbase_name="cloud";

mysqli_select_db($myconnection,$dbase_name) or die(mysqli_error($myconnection)); 
$query="insert into posts(post,subject) values('$post','$sub')"; 
mysqli_query($myconnection,$query) or die (mysqli_error($myconnection));

if($flag==1)
header( "Location: http://webfeed.16mb.com/ccl.php" );
?>
