<!-- TODO1: PHP: Crie um formulario para insercao de dados -->


<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

<!-- TODO1 -->
<!-- o atributo 'name' eh utilizado pelo lado servidor-->
<form action='calcular.php' method="get">
		
	<table>
	
	<tr>
	<td>Produto:</td>
	<td><input name="produto" type="text" required autofocus /></td>
	</tr>

	<tr>
	<td>Código:</td>
	<td><input name="codigo" type="number" required/></td>
	</tr>

	<tr>
	<td>E-mail fornecedor:</td>
	<td><input name="email" type="email" /></td>
	</tr>
	</table>

	<input type="submit">

	</form>
	
</body>

</html>