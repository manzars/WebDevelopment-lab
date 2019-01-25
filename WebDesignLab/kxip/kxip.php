
<!DOCTYPE html>
<html>
	<head>
		<title>BCC</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../kkr/kkr.css">
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
					<a class="active" href="../teams.html" title="teams">Teams</a>
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
					<a class="anker" href="../login.html" title="loginform">Log in</a>
				</li>
			</ul>
		</nav>
	</header>
  <div class="squadList">
    <h3>Kings XI Punjab(squad)</h3>
  </div>
  
  <ul class="ull">
  <?php 
$k=4;
for($j=0; $j<'2'; $j++){
  
    ?>  
    <li class="playerBackground">
      <a href="#">
        <div class="playerCard">
          <h2 class="playerName">1. Dinesh Karthik<p class="captain">&copy;</p></h2>
          <h4 class="playerType">WK Batsman</h4>
          <img class="playerPhoto" src="kkrimage/2.png">

        <div>
      <a>
    </li>
<?php 
}
?>
    <li>
      <a href="#">
        <div class="playerCard">
          <h2 class="playerName">2. Chris Lynn</h2>
          <h4 class="playerType">Batsman</h4>
          <img class="playerPhoto" src="kkrimage/2.png">

        <div>
      <a>
    </li>

    
  </ul>
</body>