<?php
	class PessoaJuridica extends Pessoa {

		private $cnpj;

		private $razao;

		private $nomefantasia;

		public function __construct($endereco=null, $bairro=null, $cidade=null, $estado=null, $pais=null, $nomefantasia=null, $razao=null, $cnpj=null) {

			parent::__construct($endereco, $bairro, $cidade, $estado, $pais);

			$this->cnpj = $cnpj;

			$this->razao = $razao;

			$this->nomefantasia = $nomefantasia;

		}

		public function save(){
			parent::save(array("cnpj"=>$this->cnpj,"razao"=>$this->razao,"nomefantasia"=>$this->nomefantasia),0);
		}

		public function setContato($contato) {

			$this->contato = $contato;

		}

		public function getCpnj() {

			return $this->cpnj;

		}

		public function setCpnj($cpnj) {

			$this->cpnj = $cpnj;

		}

		public function getRazao() {

			return $this->razao;

		}

		public function setRazao($razao) {

			$this->razao = $razao;

		}

		public function getNomefantasia() {

			return $this->nomefantasia;

		}

		public function setNomefantasia($nomefantasia) {

			$this->nomefantasia = $nomefantasia;

		}
	}
?>