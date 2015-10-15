<?php
include('uploader.php');

if (isset($_POST['upload'])){

$file_size='2000000';//dosya boyutu 
  $allowed_types='jpg,gif,png';//izin verilen uzantılar 
 $path='uploads';//yükleme yapılacak klasor  

$input_names =array();
$input_names=$_FILES['uploadPic'];

$Uploader = & new stnc_file_upload();

/*
 * eğer true ise dosya orginal ismi ile kaydedilir
* false verirseniz dosya yeniden rastgele isimlendirilir onceden aynı isimde dosya varsa üzerine yazar 
* önemli !false ise onek ve sonek de aktifdir
* dosya ya  önek ve sonek vermek içindir
* */
$Uploader->name_format (false,'st_','_nc');


$Uploader->picture_control_value=true;//resimin gerçek olup olmadığını kontrol eçindir 

$Uploader->uploader_set($input_names, $path, $allowed_types,$file_size);//çalıştırıcı


echo  $Uploader->result_report(); //rapor hata vss 
//$Uploader->uploaded_files[0]; //yüklenen dosyaların isimleri kaçsını almak istersek ama lattaki gibi tümünüde göndeüebilrisiniz 


//örnek yüklenenlerin isimlerini almak için 

 
                for ($i = 0; $i < count($input_names['name']); $i ++) {
                    $picture = $Uploader->uploaded_files[$i];
                }
}
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
