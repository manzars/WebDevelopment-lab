<!DOCTYPE html>
<html>
	<head>
		<title>PointsTable</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/pt.css"/>
	</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="test.html" title="logo">Logo</a>
				</li>
				<li>
					<a  href="index.php" title="home page">Home</a>
				</li>
				<li>
					<a href="#" title="live score">Live Score</a>
				</li>
				<li>
					<a href="schedule.php" title="schedule">Schedule</a>
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
					<a class="active" href="pt.php" title="photos">Points Table</a>
				</li>
				<li style="float: right">
					<a class="anker" href="login.html" title="loginform">Log in</a>
				</li>
			</ul>
		</nav>
	</header>

<div class="groupA"><h1>Group A</h1>

  <table class="table1">
<thead>
  <tr>
    <th></th>
    <th>Teams</th>
    <th>Match</th>
    <th>Won</th>
    <th>Lost</th>
    <th>Tied</th>
	<th>Pts</th>
    <th>NRR</th>
  </tr>
</thead>
<tbody>
<?php
        

$conn=new mysqli('localhost','root','root','BCC');

if($conn->connect_error){
    die($conn->connect_error);
}
else{ 
	echo "";
    
}

$sql = "SELECT * FROM groupA ORDER BY points DESC, NRR DESC";
$result = $conn->query($sql);



$inc=1;
while($row = $result-> fetch_assoc()){
        ?>
        <tr>
        <td><?php echo $inc ?></td>
        <td><?php echo $row['teamName'] ?></td>
        <td><?php echo $row['matches'] ?></td>
        <td><?php echo $row['won'] ?></td>
        <td><?php echo $row['lost'] ?></td>
        <td><?php echo $row['tied'] ?></td>
        <td><?php echo $row['points'] ?></td>
        <td><?php echo $row['NRR'] ?></td>
        </tr>
        <?php
    $inc++;}
?>
</tbody>
</table>
</div>
<!-- <img src="image/bg.jpg"> -->



<!-- <div class="groupB"><h1>Group B</h1>
</div> -->


</body>
</html>
