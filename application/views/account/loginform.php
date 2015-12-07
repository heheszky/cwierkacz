<form action="/logowanie" method="post" class="col-md-offset-5 col-lg-2 col-md-3">
	<div class="form-group">
		<?php echo form_error('email'); ?>
		<input type="email" name="email" class="form-control" placeHolder="Adres E-mail">
	</div>
	<div class="form-group">
		<?php echo form_error('password'); ?>
		<input type="password" name="password" class="form-control" placeHolder="Hasło">
	</div>
	<div class="form-group">
		<input type="submit" value="Zaloguj się" class="btn btn-default"><br><br>
		Nie masz konta? <a href="/rejestracja">Zarejestruj się</a>
	</div>
</form>
