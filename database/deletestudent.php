<?php

  if(!isset($_GET['studentID'])) {
    header("Location: index.php?page=deletestudentselect&error=noselect");
  } else {

    $studentID = $_GET['studentID'];

    $photo_sql = "SELECT photo from student WHERE studentID=$studentID";
    $photo_qry = mysqli_query($dbconnect, $photo_sql);
    $photo_aa = mysqli_fetch_assoc($photo_qry);
    $photo = $photo_aa['photo'];
    $file_path = "images/".$photo;
    echo $file_path;
      unlink("$file_path");

    $sql = "DELETE FROM student WHERE studentID = $studentID";
    $qry = mysqli_query($dbconnect, $sql);
    echo "<h2>Student deleted</h2>";
  }

 ?>
 <p>Student successfully deleted</p>
 <a href="index.php">Back to home page</a>
