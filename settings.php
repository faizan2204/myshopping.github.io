  
<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}
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
			require './includes/header.php';
		?>
		<div class="container panel-margin">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel-heading">
					<h2 class="panel-title">Change Password</h2>
				</div>
				<div class="panel-body">
					<form action ="settings_script.php" method="POST">
						<div class="form-group">
							<input type="password" class="form-control" name="name" placeholder="old Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="email" placeholder="new_password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="retype_new_password" required>
						</div>
						<button type="submit" class="btn btn-primary">Change</button>
					</form>
				</div>
            </div>    
		</div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>