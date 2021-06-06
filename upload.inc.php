<?php

	if (isset($_POST["upload_button"])) {
		$file = $_FILES["real_file_button"];

		$fileName = $_FILES["real_file_button"]["name"];
		$fileTmpName = $_FILES["real_file_button"]["tmp_name"];
		$fileSize = $_FILES["real_file_button"]["size"];
		$fileError = $_FILES["real_file_button"]["error"];
		$fileType = $_FILES["real_file_button"]["type"];

		$fileExt = explode(".", $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array("jpg", "png", "jpeg", "pdf");

		if (in_array($fileActualExt, $allowed)) {
			if($fileError === 0){
				if ($fileSize < 100000000) {//500000kb = 500mb
					$fileNameNew = uniqid('', true) . $fileActualExt;

					$fileDestination = "../upload/" . "." . $fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);

					header("location: ../upload.php?status=uploadsuccess");
				}
				else{
					echo "You're file is too big";
				}
			}
			else{
				echo "There was an error while uploading the file";
			}
		}
		else{
			echo "You can't upload of this type!";
		}
	}