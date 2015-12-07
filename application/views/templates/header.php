<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">-->
		<link rel="stylesheet" href="/assets/css/main.css">
		<script src='/assets/js/jquery.js'></script>
		<script src='/assets/js/moment.js'></script>
		<script src='/assets/js/livestamp.min.js'></script>
		<script src='/assets/js/bootstrap.min.js'></script>
		<script>moment.locale('pl');</script>
		<title>Ćwierkacz</title>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class='container'>
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/">
						Ćwierkacz
						</a>
					</div>
					
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Szukaj profilu">
						</div>
						<button type="submit" class="btn btn-default">Szukaj</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<?php if(isset($user)): ?>
						<li><a href="/wyloguj">Wyloguj się</a></li>
						<?php endif; ?>
					</ul>
					
				</div>
			</div>
			</nav>