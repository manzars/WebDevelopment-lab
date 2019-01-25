<?php

if($_POST){ 
?>

<!DOCTYPE html>
<html>
<head>
	<title>updateSchedule</title>
	<link rel="stylesheet" type="text/css" href="../css/schedule.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="#" title="logo">Logo</a>
				</li>
				<li>
					<a href="../index.php" title="home page">Home</a>
				</li>
				<li>
					<a href="#" title="live score">Live Score</a>
				</li>
				<li>
					<a href="../schedule.php" title="schedule">Schedule</a>
				</li>
				<li>
					<a href="../teams.html" title="teams">Teams</a>
				</li>
				<li>
					<a href="#" title="stats">Stats</a>
				</li>
				<li>
					<a href="#" title="photos">Photos</a>
				</li>
				<li>
					<a href="../pt.php" title="photos">Points Table</a>
				</li>
				<li style="float: right">
					<a class="anker" href="../ogin.html" title="loginform">Log in</a>
				</li>
			</ul>
		</nav>
	</header>
	<div class="selection">
	<form action="updateSchedule.php" method="post">
		<select name="opt" required="required">
			<option value="add">Add Match</option>
			<option value="remove">Remove Match</option>
			<option value="update">Update Match</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
	</div>
<?php  


if($_POST['opt']=='add'){
	?>
	<div class="selection2">
	<form action="scheduleUpdate.php" method="post">
		<input type="number" name="matchNo" placeholder="Match No." required="required">
		<select  class="team1" name=team2ID required="required">
			<option value="">Team1</option>	
			<option value="rr">Rajasthan Royals</option>	
			<option value="kxip">Kings XI Punjab</option>	
			<option value="dd">Delhi Daredvils</option>	
			<option value="csk">Chennai Super Kings</option>	
			<option value="srh">Sunrisers Hydrabad</option>	
			<option value="rcb">Royal Challengers Banglore</option>	
			<option value="mi">Mumbai Indians</option>	
			<option value="kkr">Kolkata Knight Riders</option>	
		</select>
		<select class="team2" name=team1ID required="required">
			<option value="">Team2</option>	
			<option value="rr">Rajasthan Royals</option>	
			<option value="kxip">Kings XI Punjab</option>	
			<option value="dd">Delhi Daredvils</option>	
			<option value="csk">Chennai Super Kings</option>	
			<option value="srh">Sunrisers Hydrabad</option>	
			<option value="rcb">Royal Challengers Banglore</option>	
			<option value="mi">Mumbai Indians</option>	
			<option value="kkr">Kolkata Knight Riders</option>	
		</select>
		<select name=groupName required="required">
			<option value="">Group</option>
			<option value="A">A</option>
			<option value="B">B</option>
			</select>

		<input type="text" name="matchDate" placeholder="Date" required="required">
		<select name=matchDay required="required">
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
			<option value="Thursday">Thurday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
		</select>
		<input type="text" name="matchTime" placeholder="Time" required="required">
		<input type="hidden" name="check" value="add">
		<input type="submit" name="submit">

	</form>
</div>


<?php }elseif($_POST['opt']=='remove')
{
	?>
	<div class="deletion">
	<form action="scheduleUpdate.php" method="post">
		<label for="matchNo">Match No</label>
		<input type="text" name="matchNo">
		<input type="hidden" name="check" value="remove">
		<input type="submit" value="">
	</form>
    </div>



<?php }
elseif($_POST['opt']=='update'){
	?>
	<form action="scheduleUpdated.php">
		<input type="text" name="UpdateMatch" placeholder="Update Match">
	</form>
<?php }


}else{
	Header('Refresh:0  url=../login.html');
}?>

<script type="text/javascript" src="../JS/jquery-3.3.1.min.js"></script>
<!-- <script type="text/javascript">
	$('input').on('click',function(){
		$(this).toggleClass("clicked");
	});
</script> -->
</body>
</html>


