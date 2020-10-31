<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <h1>File Upload</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" /><br />
        <input type="submit" name="uploadBtn" value="Upload" />
    </form>
</body>

</html>

<?php
    if(!isset($_POST['uploadBtn'])){
        exit();
    } else {
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
            $validExtensions = array("mp4", "avi", "3gp");
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
    }

?>