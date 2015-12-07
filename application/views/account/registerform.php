<form action="/rejestracja" method="post" class="col-md-offset-5 col-lg-2 col-md-3">
	<div class="form-group">
		<label for="email">Email<?php if(form_error('email')) echo " (".form_error('email').")"; ?></label>
		<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
	</div>
	<div class="form-group">
		<label for="pw">Hasło<?php if(form_error('password')) echo " (".form_error('password').")"; ?></label>
		<input type="password" name="password" placeHolder="Hasło" class="form-control" id="pw" required>
	</div>
	<div class="form-group">
		<label for="pw2">Powtórz hasło<?php if(form_error('rpassword')) echo " (".form_error('rpassword').")"; ?></label>
		<input type="password" name="rpassword" class="form-control" id='pw2' placeHolder="Powtórz hasło" required>
	</div>
	<div class="form-group">
		<label for="fname">Imie<?php if(form_error('fname')) echo " (".form_error('fname').")"; ?></label>
		<input type="text" class="form-control" id="fname" placeholder="Imie" name="fname" required>
	</div>
	<div class="form-group">
		<label for="lname">Nazwisko<?php if(form_error('lname')) echo " (".form_error('lname').")"; ?></label>
		<input type="text" class="form-control" id="lname" placeholder="Nazwisko" name="lname" required>
	</div>
	<div class="form-group">
		<label for="bdate">Data urodzenia<?php if(form_error('bdate')) echo " (".form_error('bdate').")"; ?></label>
		<input type="date" class="form-control" id="bdate" placeholder="Data urodzenia" name="bdate" required>
	</div>
	<div class="form-group">
		 <input type="submit" value="Zarejestruj się" class="btn btn-default"><br><br>
		 Masz już konto? <a href="/logowanie">Zaloguj się</a>
    </div>
  </div>
	
</form>
