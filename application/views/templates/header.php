<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" href="/assets/css/main.css">
	</head>
	<body>
		<?php if(isset($user)): ?>
			Witaj <?= $user['imie'] ?>
		<?php endif; ?>