
<?php
include('uploader.php');


$file_size='2000000';
  $file_type='jpg,gif,png';
 $path='uploads';
 
//echo count($_FILES['uploadPic']['name']);
//var_dump ($_FILES['uploadPic']);


$input_names =array();
$input_names=$_FILES['uploadPic'];

		$Uploader = & new stnc_file_upload();
		$Uploader->name_format ('st_','_nc');
		$Uploader->picture_control_value=true;
		$Uploader->uploader_set($input_names, $path, $file_type,$file_size);

//echo count($input_names['name']);

//echo var_dump($Uploader->uploaded_files);



		/* for ($i = 0; $i < count($input_names['name'][$i]); $i++){
		if ( $Uploader->uploaded) {
	echo	$Uploader->uploaded_files[$i];
		} else {
		echo  $Uploader->result_report();
		}
		}*/
		

	
//var_dump($up);

?>

<form action="" method="post" enctype="multipart/form-data">
	<input name="uploadPic[]" type="file" />
	<br>
	<input name="uploadPic[]" type="file" />
	<br>
	<input name="uploadPic[]" type="file" />
	<br>
	<input name="uploadPic[]" type="file" />
	<br>
	<input name="uploadPic[]" type="file" />
	<br>
	<input name="uploadPic[]" type="file" />
    <br>
    	<input name="uploadPic[]" type="file" />
    <br>
    <input name="upload" type="submit" value="Upload" />
</form>
