<?php 
error_reporting(0);
$conn = mysqli_connect($host='localhost',$user='root',$password='',$db='shopping');

if($conn)
{
	//echo "Connection Ok";
}

else
{
	echo "Connection not done";
}

 ?>