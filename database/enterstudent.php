<?php

if(!isset($_SESSION['admin'])) {
  header("Location: index.php");
}

if(!isset($_POST['firstname']) or !isset($_POST['lastname']) or !isset($_FILES["fileToUpload"]["name"])) {
  header("Location:index.php?page=addstudent");
} else {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $tutorgroupID =$_POST['tutorgroupID'];
  $photo = $_FILES["fileToUpload"]["name"];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {

    $uploadOk = 1;
  } else {

    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {

  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 5000000) {

  $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

  $uploadOk = 0;
}


if ($uploadOk == 0) {
  header("Location: index.php?page=addstudent&error=image");

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    $add_sql = "INSERT INTO student (firstname, lastname, tutorgroupID, photo) VALUES ('$firstname', '$lastname', $tutorgroupID, '$photo')";
    $add_qry = mysqli_query($dbconnect, $add_sql);
    echo "Success!";
  } else {
    header("Location: index.php?page=addstudent&error=image");
  }
}

}

 ?>
