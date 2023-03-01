<!DOCTYPE HTML>
<html lang="en">
<head>
	<title> placeholder </title>

</head>

<body>

		<form method="POST" action="push.php" enctype="multipart/form-data" class="upload_form">
		<label for="filename"> Choose a file: </label>
		<input type="file" name="file[]" multiple>
		<button name="submit"> UPLOAD </button>
	</form>
	
	<?php
		echo 'a';
	?>
</body>
</html>