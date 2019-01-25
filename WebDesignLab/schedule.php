<!DOCTYPE html>
<html>
	<head>
		<title>BCC</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/schedule.css"/>
		
	</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="#" title="logo">Logo</a>
				</li>
				<li>
					<a href="index.php" title="home page">Home</a>
				</li>
				<li>
					<a href="#" title="live score">Live Score</a>
				</li>
				<li>
					<a class="active" href="schedule.php" title="schedule">Schedule</a>
				</li>
				<li>
					<a href="teams.html" title="teams">Teams</a>
				</li>
				<li>
					<a href="#" title="stats">Stats</a>
				</li>
				<li>
					<a href="#" title="photos">Photos</a>
				</li>
				<li>
					<a href="pt.php" title="photos">Points Table</a>
				</li>
				<li style="float: right">
					<a class="anker" href="login.html" title="loginform">Log in</a>
				</li>
			</ul>
		</nav>
	</header>
<main>
<?php

$conn=new mysqli('localhost','root','root','BCC');

if($conn->connect_error){
    die($conn->connect_error);
}
else{ 
	echo "";
}

$sql="SELECT * FROM schedule2018 ORDER BY matchID ASC, dates ASC";
$result=$conn->query($sql);


if(true)
{
	
?>
<ul class="ull">
	 <?php
	 while($i=$result->fetch_assoc()){
	 	?>
	<li><div class="bg"></div>
		<div class="team1"><?php echo $i['team1Name']?></div>
		<div class="vs">V/s</div>
		<div class="team2"><?php echo $i['team2Name']?></div>
		<div class="matchNo">Match No.<h2><?php echo $i['matchID']?></h2></div>
		<div class="date"><?php echo $i['days']?><span><?php echo $i['dates']?></span><?php echo $i['times']?></div>
		<div class="group">Group<h2><?php echo $i['groupName']?></h2></div>

	</li>
	

	<?php }
}else{
	echo "<span>No Result Found</span>";
}
 ?>
	
</ul>
		


</main>
</body>
</html>
