<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Olá {{$nome}},</p>
	<p>Seja bem-vindo(a) ao sistema de tarefas desenvolvido pela própria Bluefoot.</p>
	<p>Para acessar o sistema, basta clicar neste <a href="{{ URL::to('/') }}">link</a>.</p>
	<p>Não esqueça de anotar seu login e senha, e de nunca repassar esses dados para ninguém!</p>
	<p>
		Login: {{$email}} <br/>
		Senha: {{$senha}}
	</p>
	<p>Atenciosamente,</p>
	<p>Equipe Bluefoot</p>
</body>
</html>