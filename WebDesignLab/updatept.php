<?php 
	if(!empty($_POST)){
?>
<!DOCTYPE html>
<html>
<head>
	<title>update pt</title>

</head>
<body>
	<form  action="PHP/updated.php" method="post">
		<select name=teamID required="required">
			<option value="">Team</option>	
			<option value="rr">Rajasthan Royals</option>	
			<option value="kxip">Kings XI Punjab</option>	
			<option value="dd">Delhi Daredvils</option>	
			<option value="csk">Chennai Super Kings</option>	
			<option value="srh">Sunrisers Hydrabad</option>	
			<option value="rcb">Royal Challengers Banglore</option>	
			<option value="mi">Mumbai Indians</option>	
			<option value="kkr">Kolkata Knight Riders</option>	
		</select>
		<input type="number" name="matches" placeholder="matches">
		<input type="number" name="won" placeholder="won">
		<input type="number" name="lost" placeholder="lost">
		<input type="number" name="tied" placeholder="tied">
		<input type="number" name="points" placeholder="points">
		<input type="number" name="NRR" placeholder="NRR">
		<input type="submit" value="update">
	</form>
</body>
</html>

<?php }
else{
	Header('Refresh:0 url=login.html');
}
?>





