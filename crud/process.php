<?php 
	include 'connect.php';

	// initialize variables
	$name = "";
	$age = "";
	$username = "";
	$address = "";
	$file = "";
	$id = 0;
	$update = false;

	//For Insert
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];

		// Collecting the file variables
		$file = $_FILES['file'];

		// Ensuring a file is uploaded
		if (empty($file['name'])){
			echo "Empty upload. Please choose a file and upload";
			exit();
		} else {
			// Declaring the file variables
			$fileName = $file['name'];
			$fileType = $file['type'];
			$fileTmpName = $file['tmp_name'];
			$fileError = $file['error'];
			$fileSize = $file['size'];

				//Specifying the supported file extension
			$validExtensions = array("jpg", "jpeg", "png");
				//Specifying the supported upload file size
			$validFileSize = 5000000;

			//explode file name from dot(.)
			$ext = explode('.', $fileName);
			// changing the file extension to lower case before comparison
			$file_extension = strtolower(end($ext));


			// Performing error checks before uploading file
				// Performing file upload error check
			if ($fileError !== 0) {
				echo "Error uploading file. Please re-upload";
				exit();
			} else {
					// Performing file extension error check
					if (!in_array($file_extension, $validExtensions)) {
					echo "File extension not supported";
					exit();
				} else {
						// Performing file size error check
					if ($fileSize > $validFileSize) {
						echo "File size is too big. Upload must not be more than 5MB";
						exit();
					} else {
						//generate Name for the image;
						$imageName = "image_".rand(1000000,9000000) . "." . $file_extension;
						//Declaring the upload location;
						$fileDestination = "uploads/".$imageName;
						// Move the user uploaded file to file upload destination
						move_uploaded_file($fileTmpName, $fileDestination);
						echo "Image successfully uploaded";
					}
				}
			}
		}

		mysqli_query($con, "INSERT INTO crudtable (name, age, username, address, img) VALUES ('$name', '$age', '$username', '$address', '$imageName')"); 
		header('location: index.php');
	}

		//For Update
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];

		// Collecting the file variables
		$file = $_FILES['file'];

		// Ensuring a file is uploaded
		if (empty($file['name'])){
			echo "Empty upload. Please choose a file and upload";
			exit();
		} else {
			// Declaring the file variables
			$fileName = $file['name'];
			$fileType = $file['type'];
			$fileTmpName = $file['tmp_name'];
			$fileError = $file['error'];
			$fileSize = $file['size'];

				//Specifying the supported file extension
				$validExtensions = array("jpg", "jpeg", "png");
				//Specifying the supported upload file size
			$validFileSize = 5000000;

			//explode file name from dot(.)
			$ext = explode('.', $fileName);
			// changing the file extension to lower case before comparison
			$file_extension = strtolower(end($ext));


			// Performing error checks before uploading file
				// Performing file upload error check
			if ($fileError !== 0) {
				echo "Error uploading file. Please re-upload";
				exit();
			} else {
					// Performing file extension error check
					if (!in_array($file_extension, $validExtensions)) {
					echo "File extension not supported";
					exit();
				} else {
						// Performing file size error check
					if ($fileSize > $validFileSize) {
						echo "File size is too big. Upload must not be more than 5MB";
						exit();
					} else {
						//generate Name for the image;
						$imageName = "image_".rand(1000000,9000000) . "." . $file_extension;
						//Declaring the upload location;
						$fileDestination = "uploads/".$imageName;
						// Move the user uploaded file to file upload destination
						move_uploaded_file($fileTmpName, $fileDestination);
						echo "Image successfully uploaded";
					}
				}
			}
		}

		mysqli_query($con, "UPDATE crudtable SET name='$name', age='$age', username='$username', address='$address', img='$imageName' WHERE id=$id");
		header('location: index.php');
	}
	
	//For Delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM crudtable WHERE id=$id");
	header('location: index.php');
}


?>