<?php
	include_once "src/View/Contato.php";
	/**
	* 
	*/

		$nome=(isset($_POST['txtNome']));
	class ContatoController
	{
		
		function __construct()
		{
			# code...
		}

		public function index()
		{
			$contato=new Contato();
			$contato->index();

		}

		public function save()
		{
			
		}
	}