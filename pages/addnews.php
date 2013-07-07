<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Cadastro de Notícias</title>
</head>

<body>
<h1>Sistema de Cadastro de Notícias</h1>

<form action="../libraries/insertnews.php" method="post">

	<label for="nome">Nome: </label>
	<input name="nome" id="nome" type="text" />

	<label for="sobrenome">Sobrenome: </label>
	<input name="sobrenome" id="sobrenome" type="text" /><br />

	<label for="cidade">Cidade: </label>
	<input name="cidade" id="cidade" type="text" /><br />

	<label for="estado">Estado: </label>
	<input name="estado" id="estado" type="text" /><br />

	<label for="email">Email: </label>
	<input name="email" id="email" type="text" /><br />

	<label for="titulo">Título do Texto: </label>
	<input name="titulo" id="titulo" type="text" /><br />

	<label for="resumo">Resumo do Texto:</label>
	<input name="resumo" id="resumo" type="text" ><br />

	<label for="texto">Texto: </label>
	<textarea name="texto" id="texto" rows="10" cols="30" />
	</textarea><br />

	<input type="submit" value="Cadastrar">

</form>


</body>
</html>