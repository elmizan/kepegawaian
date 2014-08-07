<div class="row">
	<div class="col-md-3 col-md-offset-4">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-lock fa-2x"></i> Silahkan Login</h3>
			</div>
			<div class="panel-body">
				<form role="form" action="?page=operasi" method="POST">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Username" name="username" required autofocus>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" required >
						</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">Remember Me
							</label>
						</div>
						<!-- Change this to a button or input when using this as a form -->
						<button type="submit" name="submit" value="Login" class="btn btn-success btn-block">Login</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

