<div class='container'>
	<div class='col-md-offset-1 col-md-3'>
		<div class='row'>
			<?php if(isset($user)): ?>
				<h4>Witaj</h4>
			<?php endif; ?>
			<div class='profil'>
				<span class='nazwa'><?= $user['imie'] ?> <?= $user['nazwisko'] ?></span><br>
				<span class='email'><?= $user['email'] ?></span>
			</div>
		</div>
	</div>
	<div class='col-md-7'>		
		<form method='post' class='row cwierknij'>
			<textarea placeholder='Napisz co teraz myślisz...' class='form-control cwierknij-textarea'></textarea>
			<input type='submit' value='Ćwierknij' class="btn btn-primary cwierknij-btn">
			<div class='clear'></div>
		</form>
		
		<div class='row board'>
			<div class="panel panel-default cwierknij-cwierk">
				<div class="panel-heading kto">Damian Plewa <small class="text-primary data" data-livestamp="1449506424"></small></div>
				<div class="panel-body tresc">
					Lmao #bieda
				</div>
			</div>
			
			<div class="panel panel-default cwierknij-cwierk">
				<div class="panel-heading kto">Damian Plewa <small class="text-primary data" data-livestamp="1449506424"></small></div>
				<div class="panel-body tresc">
					Lmao #bieda
				</div>
			</div>
			
			<div class="panel panel-default cwierknij-cwierk">
				<div class="panel-heading kto">Damian Plewa <small class="text-primary data" data-livestamp="1449506424"></small></div>
				<div class="panel-body tresc">
					Lmao #bieda
				</div>
			</div>
		</div>
	</div>
</div>