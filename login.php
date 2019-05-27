<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Mix Russia:Yakutia</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="194x194" href="/favicon-194x194.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="Mix Russia:Yakutia">
	<meta name="application-name" content="Mix Russia:Yakutia">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<style type="text/css">
		.marg {
			margin: 5px
		}
	</style>
</head>
<body class="bg-light">
	<div style=" margin-top: 100px" class="offset-5">
		<div class="row" style="height: 300px">
			<div class="col-3 bg-white border" style="text-align: center;border-radius: 5px">
				<img src="LOGO.png" style="width: 70%; margin-top: 10px">
				<form action="auth.php" method="POST">
					<input type="text" name="uniqueNick" placeholder="Уникальный ник" class="form-control marg">
					<input type="password" name="password" placeholder="Пароль" class="form-control marg">
					<button class="btn btn-primary" type="submit" name="submit">
						Играть
					</button>
					<p class="font-weight-light">
						Чтобы начать игру вам необходимо войти в аккаунт
					</p>
					<a href="index.php">
						Зарегистрироваться
					</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>