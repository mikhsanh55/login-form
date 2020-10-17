<!-- jQuery dan Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Code -->
<div class="container mt-4">
	<div class="row">
		<div class="offset-md-4 col-5">
			<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="bg-light p-4">
				<fieldset>
					<legend>Test Form</legend>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" placeholder="Username" class="form-control" />
					</div>
					
					<button class="btn btn-primary" type="submit">Send Data</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>
			