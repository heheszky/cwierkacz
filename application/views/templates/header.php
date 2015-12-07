<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/assets/css/main.css">
		<title>Ćwierkacz</title>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">
					Ćwierkacz
					</a>
				</div>
			</div>
			</nav>
			<?php if(isset($user)): ?>
				Witaj <?= $user['imie'] ?>
			<?php endif; ?>