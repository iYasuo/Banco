<?php

	include("ContaCorrente.php");
	session_start();
	
?>

<table border='1'>
	<tr>
		<th>Nro Conta</th>
		<th>Nome</th>
		<th>Data Abertura</th>
		<th>Saldo</th>
		<th>Taxa Manutenção</th>
		<th>Taxa Operação</th>
	</tr>
	
	<?php
		foreach($_SESSION["cc"] as $i=>$c){
			$c->exibe_dados();
		}
	?>
	
</table>

<a href="cadastro.php">Voltar para cadastro</a>