<?php

$conn=new mysqli('localhost','root','root','BCC');


if($_POST){
	$user=$_POST['username'];
	$pass=$_POST['password'];

    
	if(!empty($user) && !empty($pass)){

		$sql="SELECT * FROM login WHERE username='$user'";
		$result=$conn->query($sql);
		$res=$result->fetch_assoc();
		if($res['password']!=$pass){
			echo "<span>Incorrect Username or Password</span>";
			header('Refresh:1 , url=login.html');
		}
		}else{
			echo "<span>Something is Missing</span>";
			header('Refresh:0 , url=login.html');
	}
	
}else{
	header('Refresh:0 , url= login.html');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<style type="text/css">
		a{
			text-decoration: none;
			color: #000;
			
		}
		.anchor{
			border: 1px solid #000;
			position: relative;
			width: 50%;
			height: 50px;
			text-align: center;
			border-radius: 12px;
			left:25%;
			top: 50px;
			background-color: #2f2f2f
		}
		.anchor h2{
			position: relative;
			bottom: 7px;
			color:#fff;
		}
		.anchor:hover{
			background-color: #3CB4f2;
		}
	</style>
</head>
<body>
	<form action="updatept.php" method="post">
		<input type="submit" name="update" value="Update Points Table">
	</form>
	<form action="PHP/updateSchedule.php" method="post">
		<input type="submit" name="update" value="Update Schedule">
	</form>
	
</body>
</html>