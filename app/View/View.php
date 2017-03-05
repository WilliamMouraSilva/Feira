<?php
	include_once "src/Template/Template.php";
	//include_once "src/Template/index.html";

	abstract /**
	* 
	*/
	class View
	{
		
		function __construct()
		{
			# code...
			
		}

		protected function show($title,$content)
		{
			$template=new Template("src/Template/index.html");
			$template->set("title",$title);
			$template->set("content",$content);
			echo $template->output();
		}

		


	}
?>