<div class="col-md-offset-4 col-lg-3 col-md-3">
	<?php foreach($search_result as $result): ?>
	<div class="panel panel-default szukaj-profilu">
		<div class="panel-heading"><?=$result->first_name." ".$result->last_name." (".$result->email.") "?>
			<?php if($result->following): ?>
			<a href='/unfollow/<?=$result->id?>' class='sledz'>Przestań śledzić</a>
			<?php else: ?>
			<a href='/follow/<?=$result->id?>' class='sledz'>Śledź</a>
			<?php endif; ?>
		</div>
	</div>
	<?php endforeach; ?>
	<?php if(!$search_result): ?>
	<h4>Brak wyników wyszukiwania</h4>
	<?php endif; ?>
</div>