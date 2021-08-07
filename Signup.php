<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
	<?php
			require "./includes/header.php";
		?>
		<div class="container panel-margin">
			<div class="panel-heading">
				<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-4">
					<h1 class="panel-title"><b>SIGN UP</b></h1><br>
						<form  method="post" action="Signup_script.php">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="password" required>
							</div>
							<div class="form-group">
								<input type="number" class="form-control" name="contact" placeholder="contact" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="city" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="address" required>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
				</div>
			</div>				
		</div>
		<?php
			require "./includes/footer.php";
		?>
	</body>
</html>