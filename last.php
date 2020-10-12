<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<h2>Welcome, <?php echo $_SESSION['fname'];?></h2>
	</div>
	<h2>This is last page</h2>
</body>
</html>