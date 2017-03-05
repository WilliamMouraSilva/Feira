<?php
	namespace src/View/;
	include_once "src/View/View.php";

	/**
	* 
	*/
	class Contato extends View
	{
		private $content;
		
		function __construct()
		{
			# code...
		}

		public function index()
		{
			$Template=new Template("src/Template/contato.html");
			$this->content[]=$Template->output();
			$this->mostrar();
		}

		private function mostrar()
		{
			foreach ($this->content as $value) {
				# code...
				parent::show("Feira do Rolo|Contato",$value);
			}
			
		}
	}