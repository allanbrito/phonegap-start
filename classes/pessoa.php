<?php
	class Pessoa extends DB {

		private $id;

		private $endereco;

		private $bairro;

		private $cidade;

		private $estado;

		private $pais;

		public function __construct($endereco, $bairro, $cidade, $estado, $pais, $id=null) {
			parent::__construct();
			$this->endereco = $endereco;

			$this->bairro = $bairro;

			$this->cidade = $cidade;

			$this->estado = $estado;

			$this->pais = $pais;

			$this->id = $id;

		}
		public function save($dados, $tipo){
			$dados = array_merge($dados, array("endereco"=>$this->endereco,"bairro"=>$this->bairro,"cidade"=>$this->cidade,"estado"=>$this->estado,"pais"=>$this->pais)); 
			parent::save($dados,1);
		}

		public function getEndereco() {
			return $this->endereco;
		}

		public function setEndereco($endereco) {
				$this->endereco = $endereco;
		}

		public function getBairro() {
			return $this->bairro;
		}

		public function setBairro($bairro) {
			$this->bairro = $bairro;
		}

		public function getCidade() {
			return $this->cidade;
		}

		public function setCidade($cidade) {
			$this->cidade = $cidade;
		}

		public function getEstado() {
			return $this->estado;
		}

		public function setEstado($estado) {
			$this->estado = $estado;
		}

		public function getPais() {
			return $this->pais;
		}

		public function setPais($pais) {
			$this->pais = $pais;
		}

	}

?>