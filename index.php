<?php
	$validpages = array(
		"home" => "UCLA Computer Science",
		"download" => "Download",
		"about" => "About Me",
		"contact" => "Contact Me",
		"login" => "Login",
		"projects" => "Projects &amp; Tools",
		"linebreak" => "Line Break Converter",
		"fade" => "jQuery Image Fader",
		"interests" => "Interests",
		"portfolio" => "Portfolio",
		"notes" => "Notes & Study Guides");

	if(isset($_GET["p"])) {
		$page = $_GET["p"];
		if(!array_key_exists($page,$validpages))
			$page ="home";
	}
	else
 		$page = "home";	
 		
	$pagebody = getcwd()."/pages/".$page.".php";
	if(!file_exists($pagebody)) {
		header("HTTP/1.0 404 Not Found");
		$pagebody = getcwd()."/pages/error.php";
	}
	
	function getResume ($resumetype)
	{
		$dir = opendir("./download/resume");
		$listOfFiles = array();
		while($file = readdir($dir))
			array_push($listOfFiles,$file);
		rsort($listOfFiles);
	
		if($resumetype == "academic")
			foreach($listOfFiles as $cur)
				if($cur[9] == "A")
					return "./download/resume/".$cur;
		if ($resumetype == "technical")
			foreach($listOfFiles as $cur)
				if($cur[9] == "T")
					return "./download/resume/".$cur;
	}
	
	
	include("include/head.php");
?>
		<div id="centerbody">
			<?php 
				include($pagebody);
			?>
		</div> <!-- End div centerbody -->
	</div> <!-- End div body -->
</body>
<!-- Note: Icons are from http://icondock.com -->
</html>