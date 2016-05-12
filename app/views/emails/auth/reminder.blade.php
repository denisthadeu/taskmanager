<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Resetar a senha</h2>

		<div>
			Para resetar sua senha, complete este formulário: {{ URL::to('password/reset', array($token)) }}.<br/>
			Este link expira em {{ Config::get('auth.reminder.expire', 60) }} minutos.
		</div>
	</body>
</html>