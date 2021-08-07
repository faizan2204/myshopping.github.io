<?php
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login to LifeStyle Stores</title>
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
            <div class=" col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading" id="login">
                        <h3 class="panel-title">LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form action="login_submit.php" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Don't have an account? <a href="Signup.php">Register</a>
                    </div>
			    </div>
            </div>
		</div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>