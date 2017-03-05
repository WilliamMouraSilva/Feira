<?php
//namespace src\Controller;
include_once "src/View/cadastro.php";
include_once "src/Model/Cadastro.php";

	/**
	* 
	*/
			$nome=isset($_POST['txtNome']);
			$cpf=isset($_POST['txtCpf']);
			$email=isset($_POST['txtEmail']);
			$senha=isset($_POST['txtSenha']);

			$cadastro=new CadastroController();
			$cadastro->save($nome);

	class CadastroController
	{
		
		function __construct()
		{
			# code...
		}

		public function index()
		{
			$cadsatro=new src/View/Cadastro();
			$cadsatro->index();
			//$cadstro->mostrar();
		}

		public function save($nome)
		{
			


			$cad=new src/Model/Cadastro();
			$cad->setNome($nome);
			$cad->salvar();

		}
	}