<?php

	class PessoaFisica extends Pessoa {

		private $nome;

		private $cpf;

		private $rg;

		public function __construct($endereco=null, $bairro=null, $cidade=null, $estado=null, $pais=null, $nome=null, $cpf=null, $rg=null) {
			parent::__construct($endereco, $bairro, $cidade, $estado, $pais);

			$this->nome = $nome;

			$this->cpf = $cpf;

			$this->rg = $rg;

		}

		public function save(){
			parent::save(array("nome"=>$this->nome,"cpf"=>$this->cpf,"rg"=>$this->rg),1);
		}

		public function getCpf() {
			return $this->cpf;
		}

		public function setCpf($cpf) {
			$this->cpf = $cpf;
		}

		public function getNome() {
			return $this->nome;
		}

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function getRg() {
			return $this->rg;
		}

		public function setRg($rg) {
			$this->rg = $rg;
		}


	}
?>