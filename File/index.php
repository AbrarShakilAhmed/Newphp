<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form {
      width: fit-content;
      margin: 100px auto;
    }
    textarea {
      width: 300px;
      height: 150px;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <label for="">File name</label>
    <input type="text" name="fname" placeholder="file name here ..." required>
    <br><br>
    <textarea name="fdata" id="data" placeholder="Enter file content..." required></textarea>
    <br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php
if (isset($_POST['fname']) && isset($_POST['fdata'])) {
  $filename = basename($_POST['fname']); // avoid directory traversal
  $filepath = "uploads/" . $filename;

  // Make sure the 'uploads' directory exists
  if (!is_dir('uploads')) {
    mkdir('uploads', 0755, true);
  }

  $handle = fopen($filepath, 'w');

  if ($handle) {
    fwrite($handle, $_POST['fdata']);
    fclose($handle);
    echo "<p style='text-align:center;'>✅ File <strong>$filename</strong> created successfully!</p>";
  } else {
    echo "<p style='text-align:center; color:red;'>❌ Failed to create file.</p>";
  }
}
?>
