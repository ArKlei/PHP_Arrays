<!-- Main part -->

		<!-- action nukreipimas turėtų būti į atskirą direktoriją, pvz. /includes/login.inc.php  -->
		<p>
		
		<div class="container col-4">
		<h1>Login in:</h1></p>
		<form action="Arrays_Inputs_4 task_LoggedIn.php" method="post">
			<div class="mb-3">
				<label for="Username" class="form-label">Username/E-mail</label>
				<input type="email" name="mailuid" placeholder="Username/E-mail" class="form-control" id="username" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">
				<label for="Password" class="form-label">Password</label>
				<input type="password" name="pwd" placeholder="Password" class="form-control" id="Password">
			</div>
			<div class="mb-3">
				<button type="submit" name="login-submit" class="btn btn-primary">Login</button>
				<button class="btn btn-success" style="color:white" action=".php">Signup</button>
			</div>
			
		</form>
		</div>