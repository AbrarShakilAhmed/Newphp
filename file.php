<?php
if($_FILES["file"]["error"]==0){
  print_r($_FILES);
$targetDir = "./UploadPhoto/";
$targetFile = $targetDir . basename($_FILES["file"]["name"]);

move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

}