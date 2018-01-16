<div class="panel-user">
	<div class="panel-heading">Login into your account</div>
	<div class="panel-content">
		<form class="form" method="post" action="<?php echo site_url(); ?>user/login_process">
			<div class="form-group">
				<label for="email">Email adress</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-block btn-primary"><i class="fas fa-user"></i> Login</button>
			</div>
		</form>

		<p class="text-muted"><a href="#">You forggot your password?</a> | <a href="<?php echo site_url(); ?>user/register">Create an account</a> </p>
	</div>
</div>