<?php
$h = fopen("app.txt", "r");
echo fread($h, filesize("app.txt"));
fclose($h);

echo "something";
echo "trying";
?>
