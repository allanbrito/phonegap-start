<?php

//	include_once"classes/pessoa.php";
//	include_once"classes/pessoa_fisica.php";
//	include_once"classes/pessoa_juridica.php";

	class DB {
		private $db;
		private $database;
		
		public function __construct() {
			$db = mysql_connect("localhost", "root", "") or die("Não foi possível conectar ao banco");
			$database = mysql_select_db("#3 bimestre",$db) or die("Could not select examples");
		}

		public function save($dados){
			$result = mysql_query('INSERT INTO pessoa(endereco, cidade, estado, pais, nome, cpf, rg, cnpj, razao, nomefantasia) VALUES ("'.$dados['endereco'].'", "'.$dados['cidade'].'", "'.$dados['estado'].'", "'.$dados['pais'].'", "'.($dados['nome']?$dados['nome']:null).'","'.($dados['cpf']?$dados['cpf']:null).'", "'.($dados['rg']?$dados['rg']:null).'", "'.($dados['cnpj']?$dados['cnpj']:null).'", "'.($dados['razao']?$dados['razao']:null).'", "'.($dados['nomefantasia']?$dados['nomefantasia']:null).'")';
		}

		public function edit($dados){
			$result = mysql_query('INSERT INTO pessoa(endereco, cidade, estado, pais, nome, cpf, rg, cnpj, razao, nomefantasia) VALUES ("'.$dados['endereco'].'", "'.$dados['cidade'].'", "'.$dados['estado'].'", "'.$dados['pais'].'", "'.($dados['nome']?$dados['nome']:null).'","'.($dados['cpf']?$dados['cpf']:null).'", "'.($dados['rg']?$dados['rg']:null).'", "'.($dados['cnpj']?$dados['cnpj']:null).'", "'.($dados['razao']?$dados['razao']:null).'", "'.($dados['nomefantasia']?$dados['nomefantasia']:null).'")';
		}

		public function delete($dados){
			$result = mysql_query('INSERT INTO pessoa(endereco, cidade, estado, pais, nome, cpf, rg, cnpj, razao, nomefantasia) VALUES ("'.$dados['endereco'].'", "'.$dados['cidade'].'", "'.$dados['estado'].'", "'.$dados['pais'].'", "'.($dados['nome']?$dados['nome']:null).'","'.($dados['cpf']?$dados['cpf']:null).'", "'.($dados['rg']?$dados['rg']:null).'", "'.($dados['cnpj']?$dados['cnpj']:null).'", "'.($dados['razao']?$dados['razao']:null).'", "'.($dados['nomefantasia']?$dados['nomefantasia']:null).'")';
		}
	}


/*	$result = mysql_query("SELECT * FROM pessoa where cpf is not null");

	echo "<table border='1'>";
	echo "<th>Nome</th><th>RG</th><th>CPF</th><th>Endereço</th><th>Cidade</th><th>Estado</th><th>País</th>";
	while ($row = mysql_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row{'nome'}."</td>";
		echo "<td>".$row{'rg'}."</td>";
		echo "<td>".$row{'cpf'}."</td>";
		echo "<td>".$row{'endereco'}."</td>";
		echo "<td>".$row{'cidade'}."</td>";
		echo "<td>".$row{'estado'}."</td>";
		echo "<td>".$row{'pais'}."</td>";
		echo "</tr>";
	}
	echo "</table>";*/


/*	$result = mysql_query("SELECT * FROM pessoa where cnpj is not null");

	echo "<table border='1'>";
	echo "<th>Razão Social</th><th>Nome de Fantasia</th><th>CNPJ</th><th>Endereço</th><th>Cidade</th><th>Estado</th><th>País</th>";
	while ($row = mysql_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row{'razao'}."</td>";
		echo "<td>".$row{'nomefantasia'}."</td>";
		echo "<td>".$row{'cnpj'}."</td>";
		echo "<td>".$row{'endereco'}."</td>";
		echo "<td>".$row{'cidade'}."</td>";
		echo "<td>".$row{'estado'}."</td>";
		echo "<td>".$row{'pais'}."</td>";
		echo "</tr>";
	}
	echo "</table>";*/

//	$objPessoaFisica = new PessoaFisica("João", "Rua Tal Numero Tal", "Jardim Fragoso", "Teste", "Teste", "TEste", "1235678909", "345679");

//	$objPessoaJuridica = new PessoaJuridica("João", "Rua Tal Numero Tal", "Jardim Fragoso", "Teste", "Teste", "TEste", "123456789123456", "Teste fantazia", "contato");
	
//	echo "<pre>";
//	var_dump($objPessoaFisica);

//	var_dump($objPessoaJuridica);

?>