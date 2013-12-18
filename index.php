<!DOCTYPE HTML>
<html>
	<head>
		<title> Prova 3º Bimestre</title>
		<meta charset="UTF-8"/>
		<style>
			hidden {
				display:none;
			}
		</style>
		<script>
			function show(tipo){
				var juridica = document.getElementsByClassName('juridica'),
					fisica = document.getElementsByClassName('fisica');
				if (tipo) {
					for (i=0;i<juridica.length;i++){
						juridica[i].className += " hidden";
						juridica[i].childNodes[1].childNodes[0].value = "";
						juridica[i].childNodes[1].childNodes[0].removeAttribute("required");
					}
					for (i=0;i<fisica.length;i++){
						fisica[i].className=fisica[i].className.replace( /(?:^|\s)hidden(?!\S)/g , '' );
						fisica[i].childNodes[1].childNodes[0].setAttribute("required","required");
					}
				} else {
					for (i=0;i<fisica.length;i++){
						fisica[i].className += " hidden";
						fisica[i].childNodes[1].childNodes[0].value = "";
						fisica[i].childNodes[1].childNodes[0].removeAttribute("required");
					}	
					for (i=0;i<juridica.length;i++){
						juridica[i].className=juridica[i].className.replace( /(?:^|\s)hidden(?!\S)/g , '' );
						juridica[i].childNodes[1].childNodes[0].setAttribute("required","required");
					}
				}
			};
		</script>
	</head>
	<body>

		<?php 

			if(isset($_POST['tipo'])){
				include_once "classes/db.php";
				include_once "classes/pessoa.php";
				if ($_POST['tipo']) {
					include_once "classes/pessoa_fisica.php";
					echo 1;
					$objPessoaFisica = new PessoaFisica($_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['pais'], $_POST['nome'], $_POST['cpf'], $_POST['rg']);
					$objPessoaFisica->save();
				} else {
					echo 2;
					include_once "classes/pessoa_juridica.php";
					$objPessoaJuridica = new PessoaJuridica($_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['pais'], $_POST['nomefantasia'], $_POST['razao'], $_POST['cnpj']);
					$objPessoaJuridica->save();
				}
			} 
		?>

		<form name="formulario" action="index.php" method="post">
		<input type="radio" name="tipo" value="1" checked onClick="show(1);"/> Pessoa física 
		<input type="radio" name="tipo" value="0" onClick="show(0);"/> Pessoa Jurídica
			<table>
				<tr class="juridica hidden"><td>Razão Social: </td><td><input type="text" name="razao" size="30" placeholder="Ex.: Alysson Web & Mobile LTDA"/></td></tr>
				<tr class="juridica hidden"><td>Nome Fantasia: </td><td><input type="text" name="nomefantasia" size="30" placeholder="Ex.: Alysson's Programming" /></td></tr>
				<tr class="juridica hidden"><td>CNPJ: </td><td><input type="text" name="cnpj" size="30" placeholder="Ex.: 46.363.675/0001-04"/></td></tr>
				<tr class="fisica"><td>Nome: </td><td><input type="text" name="nome" size="30" required="" placeholder="Ex.: Alysson Jean de Gois Santos"/></td></tr>
				<tr class="fisica"><td>RG: </td><td><input type="text" name="rg" size="30" required placeholder="Ex.: 3.249.004-6"/></td></tr>
				<tr class="fisica"><td>CPF: </td><td><input type="text" name="cpf" size="30" required placeholder="Ex.: 123.456.789-09"/></td></tr>
				<tr><td style="min-width:100px">Endereço: </td><td><input type="text" name="endereco" size="30" required placeholder="Ex.: Rua tal, nº tal"/></td></tr>
				<tr><td>Bairro: </td><td><input type="text" name="bairro" size="30" required placeholder="Ex.: Distrito Industrial"/></td></tr>
				<tr><td>Cidade: </td><td><input type="text" name="cidade" size="30" required placeholder="Ex.: Aracaju"/></td></tr>
				<tr><td>Estado: </td><td><input type="text" name="estado" size="30" required placeholder="Ex.: Sergipe"/></td></tr>
				<tr><td>País: </td><td><input type="text" name="pais" size="30" required placeholder="Ex.: Brasil"/></td></tr>
			</table>
			<input type="submit"/>
		</form>
	</body>
</html>