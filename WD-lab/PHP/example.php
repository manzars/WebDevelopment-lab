<!DOCTYPE html>
<html>
<head>
	<title>My PHP Example of AIKTC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="
	width=device-width, initial-scale=1.0">
</head>
<body>
<?php
	echo '<h1>Welcome to PHP</h1>';
	if($_POST){
		$username=$_POST['username'];
		$brand=$_POST['brand'];
		echo "Thank You, $username You have voted for $brand";
    }
    else{
    	// echo <<<_END
?>
    <form method="post"
    	  action="example.php">
    	<br><label for="user">User
    	  Name: </label>
    	<input type="text"
    	 name="username"/><br>
    	<br><label>Please Vote for you Favorite Mobile Brand</label><br>
    	<br><label><input type="radio" name="brand" value="apple">Apple</label><label><input type="radio" name="brand" value="samsung">Samsung</label><label><input type="radio" name="brand" value="nokia">Nokia</label><label><input type="radio" name="brand" value="htc">HTC</label><label><input type="radio" name="brand" value="mi">Xiaomi</label><label><input type="radio" name="brand" value="asus">Asus</label>
    	<input type="submit" value="submit"></form>
    </form>
 <?php 
 // phpinfo();  	
    }
    ?>


</body>
</html>