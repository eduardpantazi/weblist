<div class="panel-user">
	<div class="panel-heading">Signup on <i>weblist</i></div>
	<div class="panel-content">
		<form class="form" method="post" action="<?php echo site_url(); ?>user/register_process">
			<div class="form-group">
				<label for="name">Your name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email adress</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="country">Your country</label>
				<input type="text" name="country" id="country" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-block btn-o btn-success"><i class="fas fa-user-plus"></i> Signup</button>
			</div>
		</form>

		<p><a href="#">You forggot your password?</a> | <a href="<?php echo site_url(); ?>user/login">Login</a> </p>
	</div>
</div>