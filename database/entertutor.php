<?php

if($_POST['tutor']=="" or $_POST['tutorcode']=="") {
  header("Location: index.php?page=addtutor&error=blank");
}

 else{

   $tutor = mysqli_real_escape_string($dbconnect, $_POST['tutor']);
   $tutorcode = mysqli_real_escape_string($dbconnect, $_POST['tutorcode']);
   $check_sql = "SELECT * FROM tutorgroup WHERE tutorcode='$tutorcode'";
   $check_qry = mysqli_query($dbconnect, $check_sql);

   if(mysqli_num_rows($check_qry)>0) {
     header("Location: index.php?page=addtutor&error=exists");

   } else {
     $insert_sql = "INSERT INTO tutorgroup (tutor, tutorcode) VALUES ('$tutor', '$tutorcode')";
     $insert_qry = mysqli_query($dbconnect, $insert_sql);
   }
 }

 ?>

 <div class="container-fluid">
  <div class="row">
    <div class="col">
      <p class="display-2">New tutor successfully added</p>
    </div>
  </div>
</div>
