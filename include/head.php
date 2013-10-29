<!DOCTYPE html>

<head>
	<title>Byron Lutz | <?php echo $validpages[$page]; ?></title>
	<meta name="description" content="I'm Byron Lutz, a Computer Science & Engineering major at UCLA who loves web design, helping the community, journalism, corny jokes, and a ton of other stuff." />
	<link rel="stylesheet" type="text/css" href="include/reset.css" />
	<link rel="stylesheet" type="text/css" href="include/style.css" />
	<link rel="stylesheet" type="text/css" href="include/tipTip.css" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Load jQuery from Google's Servers -->
	<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAAmGhPTzjaOlvKHdppjcupfxQMfCKCM5xfDyKdH3pt_k1eFmVnhxSBRmb1GxprBE61QpwtTZkPn3i4yQ"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	 <script type="text/javascript" src="include/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="include/jquery.tipTip.minified.js"></script>
	 <script type="text/javascript">
	 	$(function(){
			$(".tiptip").tipTip({delay:200});
		});
	</script>
</head>

<body>
<?php include_once("include/analytics.php"); ?>
	<header>
		<h1 id="name">Byron<br />Lutz</h1>
		<h1 id="welcome">Welcome!</h1>
<!-- 		<a href="#"><img src="img/lock.png" id="loginbutton" /></a> -->
		<ul id="social">
			<li><a href="mailto:blutz@ucla.edu"><img src="img/email.png" /></a></li>
			<li><a href="http://facebook.com/irsmart"><img src="img/facebook.png" /></a></li>
			<li><a href="http://twitter.com/byronlutz"><img src="img/twitter-2.png" /></a></li>
			<li><a href="http://profiles.google.com/Byronlutz"><img src="img/google.png" /></a></li>
			<li><a href="aim:byronltz"><img src="img/aol.png" /></a></li>
		</ul>
	</header>
	
	<div id="body">
		<div id="leftbar">
<!-- 			<button id="resume">Download My<br /><span class="resumebig">R&eacute;sum&eacute;</span></button> -->
			<nav>
				<ul id="navbar">
				<?php $leftbar = false; ?>
					<li <?php if($page == "home") { echo "id='current'"; $leftbar = true;} ?>><a href="/">Home</a></li>
					<li <?php if($page == "portfolio") { echo "id='current'"; $leftbar = true; } ?>><a href="?p=portfolio">Portfolio</a></li>
					<li><a href="resume.php">Resume</a></li>
					<li <?php if($page == "projects") { echo "id='current'"; $leftbar = true; } ?>><a href="?p=projects">Projects</a></li>

					<li <?php if($page == "about") { echo "id='current'"; $leftbar = true; } ?>><a href="?p=about">About Me</a></li>
					<li <?php if($page == "notes") { echo "id='current'"; $leftbar = true;} ?>><a href="?p=notes">Class Notes</a></li>
					<li <?php if($page == "contact") { echo "id='current'"; $leftbar = true; } ?>><a href="?p=contact">Contact</a></li>

					<?php if(!$leftbar) { ?>
						<li id='current'><a href="?p=<?php echo $page; ?>"><?php echo ucwords($page); ?></a></li>
					<?php } ?>
				</ul>
			</nav>
		</div> <!-- End div leftbar -->