<h2>Select student to delete</h2>
<div class="container-fluid">

  <div class="row">

  <?php
    $student_sql = "SELECT * FROM student";
    $student_qry = mysqli_query($dbconnect, $student_sql);
    if(mysqli_num_rows($student_qry)==0) {
      echo "<p>No students in database</p>";
    } else {
      $student_aa = mysqli_fetch_assoc($student_qry);

      do {
        $studentID = $student_aa['studentID'];
        $firstname = $student_aa['firstname'];
        $lastname = $student_aa['lastname'];
        $photo = $student_aa['photo'];
        ?>

    <div class="col-12 col-md-6 col-xl-3 gy-3">
     <div class="card">
         <?php echo "<img src='images/$photo' class='img-fluid'>"; ?>
       <div class="card-body">
         <?php echo "<h5 class='text-white'>$firstname $lastname</h5>";
               echo "<p class='card-text'><a class='btn btn-primary' href='index.php?page=deletestudentconfirm&studentID=$studentID'>Go </a></p>" ?>
       </div>
      </div>
     </div>

  <?php
      } while ($student_aa = mysqli_fetch_assoc($student_qry));
    }

    ?>
  </div>

</div>
