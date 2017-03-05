<?php
	include_once "src/View/View.php";
	/**
	* 
	*/
	class Cadastro extends View
	{
		private $content;
		function __construct()
		{
			# code...
		}
		public function index()
		{
			$Template=new Template("src/Template/cadastro.html");
			$this->content[]=$Template->output();
			$this->mostrar();
		}
		private function mostrar()
		{
			foreach ($this->content as $value)
			{
				# code...
				parent::show("Feira do Rolo|Cadastre-se",$value);
			}
		}

		public function resultado($resultado)
		{
			$this->content[]=$resultado;
			$this->mostrar();
		}
	}