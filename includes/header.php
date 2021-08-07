<nav class="nav navbar-fixed-top navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">LifeStyle Stores</a>
				</div>
				<div class="collapse navbar-collapse" id="mynavBar">
				<?php
				if(isset($_SESSION["email"])){ 
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			<?php
				}else{
			?>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
					<?php
					}
			        ?>
				</div>
			</div>
		</nav>