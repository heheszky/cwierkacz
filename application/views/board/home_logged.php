<div class='container'>
	<div class='col-md-offset-1 col-md-3'>
		<div class='row'>Sidebar</div>
	</div>
	<div class='col-md-7'>
		<div class="page-header">
			<?php if(isset($user)): ?>
				<h4>Witaj <?= $user['imie'] ?></h4>
			<?php endif; ?>
		</div>
		
		<form method='post' class='cwierknij'>
			<textarea placeholder='Napisz co teraz myślisz...' class='form-control cwierknij-textarea'></textarea>
			<input type='submit' value='Ćwierknij' class="btn btn-primary cwierknij-btn">
			<div class='clear'></div>
		</form>
		
		<div class='row board'>
			<div class="panel panel-default cwierknij-cwierk">
				<div class="panel-heading kto">Damian Plewa</div>
				<div class="panel-body tresc">
					Lmao #bieda
				</div>
			</div>
			
			<div class="panel panel-default cwierknij-cwierk">
				<div class="panel-heading kto">Damian Plewa</div>
				<div class="panel-body tresc">
					Lmao #bieda
				</div>
			</div>
			
			<div class="panel panel-default cwierknij-cwierk">
				<div class="panel-heading kto">Damian Plewa</div>
				<div class="panel-body tresc">
					Lmao #bieda
				</div>
			</div>
		</div>
	</div>
</div>