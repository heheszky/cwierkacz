<form action="/logowanie" method="post">
	<input type="email" name="email" placeHolder="Adres E-mail">
	<?php echo form_error('email'); ?>
	<input type="password" name="password" placeHolder="Hasło">
	<?php echo form_error('password'); ?>
	<input type="submit" value="Zaloguj się">
</form>
Nie masz konta? <a href="/rejestracja">Zarejestruj się</a>