<form action="/rejestracja" method="post">
	<input type="email" name="email" placeHolder="Adres E-mail">
	<?php echo form_error('email'); ?>
	<input type="password" name="password" placeHolder="Hasło">
	<?php echo form_error('password'); ?>
	<input type="password" name="rpassword" placeHolder="Powtórz hasło">
	<?php echo form_error('rpassword'); ?>
	<input type="text" name="fname" placeHolder="Imie">
	<?php echo form_error('fname'); ?>
	<input type="text" name="lname" placeHolder="Nazwisko">
	<?php echo form_error('lname'); ?>
	<input type="date" name="bdate" placeHolder="Data urodzenia">
	<?php echo form_error('bdate'); ?>
	<input type="submit" value="Zarejestruj się">
</form>
Masz już konto? <a href="/logowanie">Zaloguj się</a>