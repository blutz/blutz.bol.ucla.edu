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

    // Forward away!
    $forward = true;
	if(isset($_GET["force"])) {
		if($_GET["force"] == true)
        {
            $forward = false;
        }
	}
    $permanent = false;
    $new_url = "http://blutz.github.io";
    if($forward == true)
    {
        if($permanent == true)
        {
            header('HTTP/1.1 301 Moved Permanently');
        }
        switch($page)
        {
            case "download":
            case "fade":
            case "interests":
            case "portfolio":
            case "home":
                header('Location: '.$new_url.'/');
                break;
            case "contact":
            case "about":
                header('Location: '.$new_url.'/contact/');
                break;
            case "linebreak":
            case "projects":
                header('Location: '.$new_url.'/etc/');
                break;
            case "notes":
                header('Location: '.$new_url.'/notes/');
                break;
        }
        die();
    }

    // -------------------------------------------------------------
    // NOTHING BELOW HERE IS USED. THIS SITE IS BEING FORWARDED AWAY
    // -------------------------------------------------------------
 		
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
