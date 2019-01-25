<?php

$servername="localhost";
$username="root";
$password="root";
$dbname="BCC";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die($conn->connect_error);
}
else{ 
	echo "";
 }

if($_POST)
{
$teamID=$_POST['teamID'];
$matches=$_POST['matches'];
$won=$_POST['won'];
$lost=$_POST['lost'];
$tied=$_POST['tied'];
$points=$_POST['points'];
$NRR=$_POST['NRR'];


if(!empty($teamID) && !empty($matches) && !empty($won) && !empty($lost) && !empty($tied) && !empty($points) && !empty($NRR)){



$sql1="update groupA set matches='$matches', won='$won', lost='$lost', tied='$tied', points='$points' ,NRR='$NRR' where teamID='$teamID'";

if($conn->query($sql1)===True){
    echo "<h1>Point Table Updated</h1>";
}
else{
    echo "<h1>Failed</h1>";
}
}else{
	echo "<span>Something is Missing!</span>";
	header('Refresh:2, url=../updatept.php');
}
}else{
	header('Refresh:0, url=../updatept.php');
}
?>

