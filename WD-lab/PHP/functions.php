<?php

$link=null;
function connectDB()
{
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="root";
	$dbname="AIKTC";

	global $link;
	$link=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(mysql_error());
	mysqli_select_db($link,$dbname)or die(mysql_error());
}

function queryMysql($query)
{
	connectDB();
	global $link;
	$result=mysqli_query($link,$query);
	if(!$result)
	{
		echo '<div class="alert alert-danger">Failed to Execeute query<br> Mysql Error'.mysql_error($link).'</div>';
		die();
	}
	mysqli_close($link);
	return $result;
}


function fix_name($name){
    $name=trim($name);
    $name=  ucfirst($name);
    $name=  addslashes($name);
    return $name;
}
function fix_email($email){
    $email=trim($email);
    $email=  strtolower($email);
    $email=  addslashes($email);
    return $email;
}
function fix_address($address){
    $address=trim($address);
    $address=  strtoupper($address);
    $address=  addslashes($address);
    return $address;
}
function fix_rollno($rollno){
    $rollno=trim($rollno);
    $rollno=  strtoupper($rollno);
    return $rollno;
}
?>