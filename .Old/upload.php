<?php
echo isset($_POST[uploaded]);
include("/home/public_html/password_protect.php");
phpinfo();
var_dump($_FILES);
$tmp_dir = dirname(__FILE__) . '/tmp';
ini_set('upload_tmp_dir', $tmp_dir);

// Only process upload if the hidden string has been passed as a POST variable
if(isset($_POST[uploaded]))
{
	echo "hey";
	// Set the target directory (and thus visibility) depending on the checkbox
	if($_POST[visibility]=="uploadPrivate")
	{
		$targetDirectory = "private/";
	}
	else
	{
		$targetDirectory = "download/";
	}
	$targetDirectory = $targetDirectory . basename($_FILES['uploadedfile']['name']);
	
	echo "<pre>";
	print_r($_FILES['uploadedfile']);
	echo "</pre>";
	
	// Move the uploaded file to the correct directory
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $targetDirectory))
	{
		echo "<strong>Your file, " . basename($_FILES['uploadedfile']['name']) . " has been uploaded to the " . ($_POST[visibility] == "uploadPrivate" ? "Private" : "Public") . " server successfully.</strong><br /><br />";
	}
	else
	{
		echo "<em>There was an error while uploading.</em><br /><br />";
	}
}
?>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<form enctype="multipart/form-data" action="upload.php" method="POST">
		Choose File to Upload: <input name = "uploadedfile" type="file" /><br />
		Private? <input type="checkbox" name="visibility" value="uploadPrivate" /><br /><br />
		<input type="hidden" value="uploaded" name="uploaded" />
		<input type="submit" value="Upload File" />
	</form>
</body>