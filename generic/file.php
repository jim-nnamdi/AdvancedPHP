<?php

# r+ (read and write) : starts from the firstline 
# w+ (read and write) : create file !exists. 
# x+ (read and write) : throw error if !exists.

$file = fopen("test.txt", "r");
echo fread($file, filesize("test.txt"));
fclose($file);

# fgets() gets the first line .

$s_file = fopen("test.txt", "r");
if (!feof($file)) {
  echo fgets($s_file);
  fclose($s_file);
}

# fgetc returns the first character . 

$a_file = fopen("test.txt", "r");
while (!feof($a_file)) {
  echo fgetc($a_file);
  fclose($a_file);
}

# upload file . 

$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$save_image = 1;
$image_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
  $check = getimagesize($target_file, $_FILES["filetoupload"]["tmp_name"]);
  if ($check)
    echo "file is an image" .  $check['mime'];
  $save_image = 1;
} else {
  echo "file is not an image";
  $save_image = 0;
}
