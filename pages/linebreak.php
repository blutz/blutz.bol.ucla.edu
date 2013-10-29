<script type="text/javascript" src="include/jquery.hotkeys.js"></script>

<script type="text/javascript">
		window.onload = function()
		{
			document.convertForm.fromText.focus();
			$(document).bind('keydown', 'tab', lineConvert);
		}
	
		function lineConvert()
		{
			var fromText = document.convertForm.fromText.value;
			fromText = fromText.replace(/\n/g,"\n\n");
			document.convertForm.toText.value = fromText;
			document.convertForm.toText.select();
		}
</script>



<style type="text/css">
	textarea {
		width:250px;
		height:300px;
		font-family:verdana;
		font-size:0.7em;
		line-height:1em;
		display:block;
		float:left;
	}
	textarea#toText {
		background-color:#a0a5b9;
	}
	button {
		display:block;
		float:left;
	}
	form {
		height:350px;
	}
</style>

<section>
	<h2>Linebreak Converter</h2><hr />
	<p>Use this converter to add a line break after every line of text. Paste your text in the left box, click "Convert", then copy the converted text from the right box. If you find any bugs, please <a href="?=contact">contact me</a>.</p>
	<form name="convertForm">
		<textarea id="fromText" onClick="document.convertForm.fromText.select();"></textarea>
		<button id="convert" onClick="lineConvert(); return false;" >Convert</button>
		<textarea id="toText" readonly="true" onClick="document.convertForm.toText.select();"></textarea>
	</form>
</section>