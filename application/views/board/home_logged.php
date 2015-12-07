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
		<form action='/dodaj' method='post' class='row cwierknij'>
			<textarea name='content' placeholder='Napisz co teraz myślisz...' class='form-control cwierknij-textarea'></textarea>
			<input type='submit' value='Ćwierknij' class="btn btn-primary cwierknij-btn">
			<div class='clear'></div>
		</form>
		
		<?php if(@$TAG): ?>
			<h2>Posty z tagiem <?= @$TAG ?></h2>
		<?php endif; ?>
		
		<div class='row board'>
			<?php if(!count($posts)): ?>
				Niestety brak postów do wyświetlenia
			<?php endif; ?>
			<?php foreach($posts as $post): ?>
			<div class="panel panel-default cwierknij-cwierk">
				<div class="panel-heading kto"><a href="/u/<?=$post->author_id?>"><?=$post->first_name.' '.$post->last_name?></a><a href='/cwierk/<?=$post->post_id?>'><small class="text-primary data" data-livestamp="<?=$post->timestamp?>"></small></a></div>
				<div class="panel-body tresc">
					<?=$post->content?>
				</div>
			</div>
			<?php endforeach; ?>
			<?php if(count($posts) >= 20): ?>
			<a href="/<?=++$page?>" class="btn btn-primary" style="width: 100%;">Następna strona</a>
			<?php endif; ?>
		</div>
		<script>
			var posts = document.getElementsByClassName("cwierknij-cwierk");
			for(var x = 0; x < posts.length; x++){
				posts[x].children[1].innerHTML = posts[x].children[1].innerText.replace(/#(.+?)(?=[\s.,:,]|$)/g, function(x){return "<a href='/tag/"+x.substr(1)+"'>"+x+"</a>";});
			}
		</script>
	</div>
</div>