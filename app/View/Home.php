<?php
include_once "app/Template/Template.php";
//include_once "src/Template/index.php";



/**
* 
*/
class Home
{
	
	function __construct()
	{

		# code...
		//parent::__construct("Home Page");
		$Template=new Template("app/Template/index.html");
		$Template->set("title","Home Page");
		$Template->set("content","olá sr William");
		echo $Template->output();
		
	}

	public function print($text)
	{
		echo 'olá seja bem vindo sr: '.$text;
	}
}
