<?php 

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

// Forward to new site
if(false)
{
    header('HTTP/1.1 301 Moved Permanently');
}
header('Location: http://blutz.github.io/resume.pdf');
die();
header('Location: '.getResume('technical'));
?>
