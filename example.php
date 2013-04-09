<?php
include('uploader.php');

$file_size='2000000';
  $file_type='jpg,gif,png';
 $path='uploads';
 


$input_names =array();
$input_names=$_FILES['uploadPic'];

$Uploader = & new stnc_file_upload();
$Uploader->name_format ('st_','_nc');// upload olayına önek ve sonek vermek içindir
$Uploader->picture_control_value=true;//resimin gerçek olup olmadığını kontrol eçindir varsayılan true değeri gonderiri
$Uploader->uploader_set($input_names, $path, $file_type,$file_size);//çalıştırıcı

/*
echo  $Uploader->result_report(); //rapor hata vss 
$Uploader->uploaded_files[$i]; //yüklenen dosyaların isimleri
*/

//örnek yüklenenlerin isimlerini almak için 

/* for ($i = 0; $i < count($input_names['name'][$i]); $i++){
		if ( $Uploader->uploaded) {
	echo	$Uploader->uploaded_files[$i];
		} else {
		echo  $Uploader->result_report();
		}
		}*/
		
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
