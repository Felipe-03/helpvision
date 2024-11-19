<?php
//Nome do arquivo alterar-cliente.php
include("conexao.php");
include("banco-cliente.php");
$cod_cliente = $_GET['cod_cliente'];
$cliente = busca($conexao,$cod_cliente);
?>
<html>
	<head><title>Alterar cliente</title></head>
	<body>
	<form method="post" action="verificaalteracao.php">
	Cod_Cliente<input type="text" name="txtcod" value="<?php echo $cliente['cod_cliente']?>"><br>
	Nome<input type="text" name="txtnome" value="<?php echo $cliente['nome']?>"><br>
	Telefone<input type="text" name="txttel" value="<?php echo $cliente['telefone']?>"><br>
	Email<input type="text" name="txtemail" value="<?php echo $cliente['email']?>"><br>
	Endereço<input type="text" name="txtend" value="<?php echo $cliente['endereco']?>"><br>
	Idade<input type="text" name="txtidade"value="<?php echo $cliente['idade']?>"><br>
	Salário<input type="text" name="txtsal" value="<?php echo $cliente['salario']?>"><br>
	<input type="submit" value="Alterar">
	</form>
	</body>
</html>