<?php 
		if ($_SERVER[REMOTE_ADDR] == "169.232.115.164")
		{
	?>
	<h3 name="emailform">Direct Email</h3>
	<?php if(isset($_POST['name']))
	{
		$to = "blutz@ucla.edu";
		$subject = "[blutz.bol.ucla.edu] New Message From ".$_POST['name'];
		$message = $_POST['message']."<br /><br /><br /><hr /><br />From: ".$_POST['name']."<br />On: ".date("D, F j, Y")."<br />IP: ".$_SERVER['REMOTE_ADDR'];
		$headers = 'From: blutz@ucla.edu';

		if(mail($to, $subject, $message, $headers))
			echo "Your message has been sent to Byron! He'll get back to you as soon as possible. If it's during midterms or final exams, it may take a little longer than you'd expect. If you urgently need to contact him, use the methods above!";
		else
			$errormsg = "Sorry! We couldn't send your message right now! Try to contact Byron in another way or use the form below.";

	}
	if(isset($errormsg) || !isset($_POST['name']))
	{
		echo "<h3 class='error'>".$errormsg."</h3>";

	?>
		<p>Fill out the form below to send an email directly to me. If I don't personally know you, this is the best way to get in contact with me.</p>
		<form method="post" id="contactme" action="?p=contact#emailform">
		<fieldset>
			<label for="name" class="tooltip" title="What's in a name? That which we call a rose
	By any other name would smell as sweet.">Name:</label><br /><input type="text" name="name" class="required" minlength="2" /><br />
			<label for="email" class="tooltip" title="So I can email you back">Email:</label><br /><input type="text" name="email" id="email" class="required email" /><br />
			<label for="message" class="tooltip" title="Whatever you type here will be sent to me in an email" >Message:</label><br /><textarea name="message"  id="message" rows="6" cols="80" class="required" minlength="5" ></textarea><br />
			<input type="submit" name="submit" class="submit" value="Send" />
		</fieldset>
		</form>
	<?php } ?>
<?php } ?>




