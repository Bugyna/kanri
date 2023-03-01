<?php
	header('Content-Type: text/plain; charset=utf-8');
	if (!empty($_POST)) {

		echo "post";
		var_dump($_POST);
		echo "end";
		echo "<br>";
		

		if (!empty($_FILES["file"]['tmp_name']) && $_FILES["file"]['tmp_name'][0] != '') {
			echo "files: ";
			var_dump($_FILES);
			echo "files: " . count($_FILES["file"]["name"]) . "\n";
	
			
			for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {
				$path = "uploads/";
				$filetype = mime_content_type($_FILES["file"]["tmp_name"][$i]);
				if (!file_exists($path)) { mkdir($path, 0777); }

				
				// $res = execute_query("INSERT INTO cabinet_prod (ID, author, description, filename, filesize, filetype) VALUES (NULL, :author, :description, :filename, :filesize, :filetype);", [":author" => $user, ":description" => $_POST["description"], ":filename" => $_FILES["file"]["name"][$i], ":filesize" => $_FILES["file"]["size"][$i], ":filetype" => $filetype]);
				// $file_id = $conn->lastInsertId();
				// echo "file_id: ".$file_id;
				// $path .= $file_id;
				$path .= sha1($_FILES["file"]["name"][$i]);
				// echo "path: " . $path . $_FILES["file"]["name"][$i] . "\n" . sha1($_FILES["file"]["name"][$i]) . "\n";
				
				
				// if (file_exists($path)) {
					// echo "Something went wrong and it was probably the sysadmins fault";
					// die();
				// }


				if ( !move_uploaded_file($_FILES['file']['tmp_name'][$i], $path) )
				{
					echo 'Failed to move uploaded file.';
					die();
				}
		
				// else {
					// echo "Something went wrong and it was probably the sysadmins fault";
					// die();
				// }
			}
			echo "file\n";
		}

		echo "ok?\n";
		die();
		// redirect("../upload.php");
	}

	echo "not ok";
?>

