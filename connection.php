<?php
$host="localhost";
$user="root";
$pass="";
$db="aayush";

$con= mysqli_connect($host,$user,$pass,$db);
if(!$con)
{
        die('check connection'.mysqli_error($con));
}

?>
