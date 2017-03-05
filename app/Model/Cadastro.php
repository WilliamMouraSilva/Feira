<?php
namespace src\Model;
	/**
	* 
	*/
	class Cadastro
	{
		private $nome;
		private $cpf;
		private $email;
		private $senha;

		function __construct()
		{
			# code...

		}

		public function getNome()
		{
			return $this->nome;
		}
		public function setNome($nome)
		{
			$this->nome=$nome;
		}
		public function getCpf()
		{
			return $this->cpf;
		}
		public function setCpf($cpf)
		{
			$this->cpf=$cpf;	
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function setEmail($email)
		{
			$this->email=$email;
		}

		public function getSenha()
		{
			return $this->senha;
		}
		public function setSenha($senha)
		{
			$this->senha=$senha;
		}


		public function salvar()
		{
			$file=fopen("txt", "w");
			fwrite($file,$this->nome );
			fclose($file);
		}
	}