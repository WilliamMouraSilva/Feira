<?php
	include_once "View.php";
	include_once "src/Template/Template.php";
	/**
	* 
	*/
	class Sobre extends View
	{
		private $content;
		
		function __construct()
		{
			# code...
			//parent::__construct($title);

			//parent::__construct("Feira Do Rolo|Sobre",$this->content);

		}

		public function index()
		{
			//$this->content[]=
			$Template=new Template("src/Template/sobre.html");
			$this->content[]=$Template->output();

			
		}

		public function print($text)
		{
			
			$this->content[]= "<strong>".$text."</strong>";
		}

		public function form()
		{
			$this->content[]= '<input type="button" id="btn" class="btn btn-primary" value="testando 123456789">';
		}


		public function botao()
		{
			return '<input type="button" id="btn" class="btn btn-primary" value="novo botao 123456">';
		}
		public function sho()
		{
			foreach ($this->content as $value) {
				# code...
				parent::show("Feira do Rolo|Sobre",$value);
			}
			
		}
	}
?>