<?php
$dirname = "./private/";
$dir = opendir($dirname);
$pass = $_POST["password"];
if ($pass != "byron")
{
	header('Location: http://blutz.bol.ucla.edu/');
}
?>
<html>

<head>
<title>Byron Lutz | Student, UCLA</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
</head>


<body>
<h1>Private Downloads</h1>
	<div class="cBox" id="downloads">
		<h3>Downloads</h3>
		<p>If you are looking for a download, you should find it below. Some downloads may be deleted after a few weeks, so I would recommend downloading anything you need to keep to your computer.</p>
		<p>
			<ul>
			<?php
			while(false != ($file = readdir($dir)))
			{
			if(($file != ".") and ($file != "..") and ($file != "Old"))
			{
			echo("<li>
			<a href='$dirname$file'>$file</a>
			</li>");
			}
			}
			?>
			</ul>
		</p>
	</div> <!-- End downloads cBox Div -->
	
	<a href="./" id="private">Return</a>
	
</body>

</html>