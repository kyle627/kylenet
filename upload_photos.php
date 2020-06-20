<?php

if (isset($_POST['submit'])) {
	$photo = $_FILES['file'];

	/* Gather data from the file uploaded:
	for example, its name, size and type */

	$file_name = $_FILES['file']['name']; 
	$file_temporary_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_error = $_FILES['file']['error'];
	$file_type = $_FILES['file']['type'];

	/* determine file extension by utilizing explode function
	and getting whatever comes after the last '.' in its name 
	Makes sure that the file extension is a lowercase string*/

	$file_extension = explode('.', $file_name);
	$file_actual_extension = strtolower(end($file_extension));

	/*An array of the allowed file extensions the user can upload*/

	$allowed_file_extensions = array('jpg', 'jpeg','png');

	if (in_array($file_actual_extension, $allowed_file_extensions)) {
		if ($file_error === 0) {
			if ($file_size < 5000000) { 

				/*Generates a unique file name. This is to insure a file of the
				same name (potnentially) isn't replaced, therefore 
				uniqid() is utilized*/

				$unique_file_name = uniqid('', true). '.' . $file_actual_extension;
				$file_destination = 'uploaded_files/'. $unique_file_name;

				/* Moves the file name generated to the proper directory*/

				move_uploaded_file($file_temporary_name, $file_destination);
				header("Location:index.php?=Successfully_uploaded");
				//echo "Successfully uploaded";
				exit();

			/* Edge Case notifications::: Notifies if the file is 
				1. Too big
				2. There was an error within the file
				3. Is the right file extension
			*/	

			}else{
				echo('Your file is too big.');
				echo '<a href="photo_index.html">Back</a>';
			}
		}else{
			echo('There was an error trying to upload this file. Try another file.');
			echo '<a href="photo_index.html">Back</a>';
		}
	}else{
		echo('Files can only be of types \'png\', \'jpg\' and \'jpeg\'');
		echo '<a href="photo_index.html">Back</a>';
	}

}
