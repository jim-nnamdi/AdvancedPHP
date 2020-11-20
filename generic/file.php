<?php

# r+ (read and write) : starts from the firstline 
# w+ (read and write) : clears existing content & create file !exists. 
# x+ (read and write) : throw error if !exists.
# a+ (read and write) : retains content and adds to it.

$file = fopen("test.txt", "r");
echo fread($file, filesize("test.txt"));
fclose($file);

# fgets() gets the first line .

$s_file = fopen("test.txt", "r");
if (!feof($s_file)) {
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

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$save_upload = 1;
$image_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

# check if image . 
if (isset($_POST["submit"])) {
  $check = getimagesize($target_file, $_FILES["filetoupload"]["tmp_name"]);
  if ($check) {
    echo "the file is an image" . $check["mime"];
    $save_upload = 1;
  }
  if (file_exists($target_file)) {
    echo "file already exists";
    $save_upload = 0;
  }
  if (filesize($target_file) > 100) {
    echo "file is too large, please choose a lesser file";
    $save_upload = 0;
  }

  # upload file . 
  if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
    echo "file has been uploaded successfully to " . $target_dir;
    $save_upload = 1;
  }
} else {
  echo "file is not an image";
  $save_upload = 0;
}
