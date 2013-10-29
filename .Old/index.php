<?php
$dirname = "./download/";
$dir = opendir($dirname);
?>
<html>

<head>
<title>Byron Lutz | Student, UCLA</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAAmGhPTzjaOlvKHdppjcupfxQMfCKCM5xfDyKdH3pt_k1eFmVnhxSBRmb1GxprBE61QpwtTZkPn3i4yQ"></script>

<script language="Javascript" type="text/javascript">
	google.load("jquery", "1.4.4");
</script>

</head>


<body>

	<h2>Welcome<br />to the website of</h2>
	<h1>Byron Lutz</h1>
	<hr />
	<div class="cBox" id="about">
		<h3>About Me</h3>
		<p>I am Byron Lutz, a computer science major at UCLA. I live on campus (in Los Angeles) and am originally from California's Central Valley. If you would like to know more about me or would like to see any of my work, send me an email.</p>
		<p>All of my downloads are located below. If your download is not showing, it is a private download and you will have to follow the link I sent you.</p>
	</div> <!-- End about cBox Div -->
	
	<div class="cBox" id="downloads">
		<h3>Downloads</h3>
		<p>If you are looking for a download, you should find it below. Some downloads may be deleted after a few weeks, so I would recommend downloading anything you need to keep to your computer.</p>
		<p>
			<ul>
			<?php
			while(false != ($file = readdir($dir)))
			{
			if(($file != ".") and ($file != ".."))
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
	
	<a id="private">&ndash; Access Private Files &ndash;</a>
	
	<div href="#" class="cBox" id="auth">
		<h3>Authenticate</h3>
		<p>Please type in your password below to access the private files:</p>
		<form action="private.php" method="post">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" />
			<input type="submit" name="submit" id="submit" />
		</form>
	</div>
	
	
	<script type="text/javascript">
		$('#private').click(function()
		{
			$('#auth').show(0, function()
			{
				$('head, body').animate({
					scrollTop: 5000
				}, 500);
				$('#password').focus();
			});
		}
		);
	</script>
</body>

</html>