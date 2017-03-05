<?php
	
	
		include_once "src/View/Sobre.php";
	
	/**
	* 
	*/
	
	class SobreController
	{
		
		function __construct()
		{
			
		}
		
		public function index()
		{
			$sobre=new Sobre();	
			//$sobre->form();
			$sobre->index();
			$sobre->sho();
		}
	}
?>