<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="include/jquery.color.js"></script>


<script type="text/javascript">
	var thisImage="image1";	
	
	function bFade(image) {
		if(window.thisImage != image)
		{
			$('#'+window.thisImage).fadeOut('slow',function(){});
			$('#'+image).fadeIn('slow',function(){});
			window.thisImage=image;
		}
	}
	
	$(document).ready(function() {
		$('#redclick').click(function() {
			$('#colorfade').animate({backgroundColor: 'red'}, 500);
		});
		$('#blueclick').click(function() {
			$('#colorfade').animate({backgroundColor: 'blue'}, 500);
		});
		$('#greenclick').click(function() {
			$('#colorfade').animate({backgroundColor: '#00F44D'}, 500);
		});
	});
</script>

<style type="text/css">
	div.image {
		background-image: url("img/colorTest.png");
		width:400px;
		height:200px;
		position:absolute;
		margin-top:30px;
		margin-bottom:40px;
	}
	div#image1{
		background-position:0px 0px;
	}
	div#image2{
		background-position:0px 200px;
		display:none;
	}
	div#image3{
		background-position:0px 400px;
		display:none;
	}
	div#colorfade {
		width:400px;
		height:200px;
		background-color:red;
		margin-top:30px;
		margin-bottom:40px;
	}
</style>
<h2>jQuery Pure Div Fade Test</h2>
<hr />
<ul id="downloads">
	<li><a id="redclick">Red</a></li>
	<li><a id="greenclick">Green</a></li>
	<li><a id="blueclick" style="margin-bottom:30px">Blue</a></li>
</ul>

<div id="colorfade"></div>

<h2>jQuery Image Fade Test</h2>
<hr />
<p>Click on an image button below to fade to an image.</p>
<ul id="downloads">
	<li><a onClick="bFade('image1')">Image1</a></li>
	<li><a onClick="bFade('image2')">Image2</a></li>
	<li><a onClick="bFade('image3')" style="margin-bottom:30px">Image2</a></li>
</ul>

<div id="image1" class="image"></div>
<div id="image2" class="image"></div>
<div id="image3" class="image"></div>

<div style="height:300px"></div>
