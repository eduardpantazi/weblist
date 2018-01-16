	<div class="panel-user">
		<div class="panel-heading">
			<?php echo $profile->name; ?> <span class="gold">Premium</span>
			<span class="d-inline float-right">
				<a href="#" class="btn-sm btn btn-secondary"><i class="far fa-envelope"></i> Mail</a>
			</span>
		</div>
		
		<div class="panel-content">
			<img class="panel-avatar" src="<?php echo gravatar($_SESSION['my_email'], 100); ?>">
			<span class="panel-badge"><i class="fas fa-star"></i></span>
			<table class="float-right user">
				<tr>
					<td><b>Country</b></td>
					<td><?php echo $profile->country; ?></td>
				</tr>
				<tr>
					<td><b>Joined</b></td>
					<td><?php echo $profile->date_registred; ?></td>
				</tr>
				<tr>
					<td><b>Websites</b></td>
					<td><a href="#">4 websites added</a></td>
				</tr>
				<tr>
					<td><b>Reviews</b></td>
					<td><a href="#">18 reviews added</a></td>
				</tr>
			</table>
		</div>

	</div>

