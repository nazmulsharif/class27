<?php  
	session_start();
	if(isset($_POST['submit'])){
		echo $fname = $_POST['fname'];
		echo $email = $_POST['email'];
		$_SESSION['fname'] = $fname;
		$_SESSION['email'] = $email;
		header("location:index.php");

	}
	
 	
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
			<form action="" class="col-md-6 mt-5" method="post">
				<div class="form-group">
					<input type="text" name="fname" class="form-control"placeholder="Full Name" >
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control"placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control"placeholder="Password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="submit">
				</div>
			</form>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>