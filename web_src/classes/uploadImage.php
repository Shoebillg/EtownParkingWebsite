<?php
require_once "./../includes/config.php";

$urlEditdb = $url.'web_src/editDatabase.php';
$target_dir = "./../images/lots/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$text = "";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    //$text = $text."File is an image - " . $check["mime"] . ".";
    //echo "<script type='text/javascript'>alert('$text');</script>";
    $uploadOk = 1;
  } else {
    $text = $text."File is not an image. ";
    //echo "<script type='text/javascript'>alert('$text');</script>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $text = $text."Sorry, file already exists. ";
  //echo "<script type='text/javascript'>alert('$text');</script>";
  $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $text = $text."Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
  //echo "<script type='text/javascript'>alert('$text');</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $text = $text."Your file was not uploaded.";
  echo "<script type='text/javascript'>alert('$text');</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $text = "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    echo "<script type='text/javascript'>alert('$text');</script>";
  } else {
    $text = $text."Sorry, there was an error uploading your file.";
    echo "<script type='text/javascript'>alert('$text');</script>";
  }
}

?>
<script type="text/javascript">location.href = ' <?php echo $urlEditdb; ?>';</script>