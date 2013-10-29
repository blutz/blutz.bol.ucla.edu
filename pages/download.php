<section>
	<h2>Downloads</h2><hr />
	<article>
	<h3 name="resume">R&eacute;sum&eacute;</h3>
	<p>I have <strong>two versions</strong> of my r&eacute;sum&eacute;: academic (everything that goes on at school and all my activities) and technical (all my work in Computer Science and the "real world"). Download the one you want or download both!</p>
	<div id="resume">	
		<a href="<?php echo getResume("academic"); ?>"><div id="resume1">
			<h4>Academic</h4>
			<br />
			<p>Everything I'm up to at school: awards, activities, etc.</p>
		</div></a>
		<a href="<?php echo getResume("technical"); ?>"><div id="resume2">
			<h4>Technical</h4>
			<br />
			<p>Everything in the real world, outside the boundaries of UCLA.</p>
		</div></a>
	</div> <!-- END RESUME DIV -->
	
	
	<h3>Miscellaneous Files</h3>
	<p>Below are some files I have posted for download. I have done my best to prevent infringing on anybody's copyright, but if you believe something is yours and don't want me to distribute it, <a href="?p=contact">send me a message</a> and we can get it taken care of.</p>
		<?php		
			$dir = opendir("./download/");
			$listOfFiles = array();
			while($file = readdir($dir))
				if ($file[0] != "." && !is_dir('./download/'.$file))
					array_push($listOfFiles,$file);
			sort($listOfFiles);
			if(sizeof($listOfFiles) > 0)
			{
				echo "<ul id='downloads'>";
				foreach($listOfFiles as $file)
						echo "<li><a href='./download/".$file."'>".$file."</a></li>";
				echo "</ul>";	
			}
			else
				echo "<p style='text-align:center;font-size:1.2em;'>Sorry! Nothing here at the moment!</p>";		
		?>



<!--
		<h3>Private Files</h3>
		<p>If I have given you a code for a private file, enter it below the click "Download."</p>
-->
	</article>
</section>