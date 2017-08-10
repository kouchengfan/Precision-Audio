<?php

// Upload and Rename File
$brandName = $_POST['brandName'];

if (isset($_POST['submit']))
{
	$filename = $_FILES["fileToUpload"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["fileToUpload"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.jpg');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000))
	{	
		// Rename file
		$newfilename = $brandName. $file_ext;
		if (file_exists("img/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "img/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 2000000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}

?>