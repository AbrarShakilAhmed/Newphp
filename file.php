<?php
if($_FILES["file"]["error"]==0){
move_uploaded_file($_FILES["file"]['tmp_name'],"./UploadPhoto/".basename($_FILES["file"]["name"]));
}


?>
<!DOCTYPE html>
<html lang="en">
  <link href="https://unpkg.com/mocha-css" rel="stylesheet" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <img src="<?php echo './UploadPhoto/'.basename($_FILES['file']['name'])?>"  alt="" width="400">

</body>
</html>