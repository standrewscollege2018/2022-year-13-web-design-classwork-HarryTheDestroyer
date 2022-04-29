<div class="container-fluid">
  <div class="row g-3">
    <?php
    if(!isset($_GET['tutorgroupID'])) {
      header("Location: index.php");
    } else {
      $tutorcode = $_GET['tutorcode'];
      $tutorgroupID = $_GET['tutorgroupID'];
      $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
      $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

      if(mysqli_num_rows($tutor_qry)==0) {
        echo "<p>No students in $tutorcode</p>";
      } else {
        $tutor_aa = mysqli_fetch_assoc($tutor_qry);
        echo "<h1>$tutorcode</h1>";

        do {
          $firstname = $tutor_aa['firstname'];
          $lastname = $tutor_aa['lastname'];
          $photo = $tutor_aa['photo'];
          ?>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="card">
              <?php echo "<img src='images/$photo' class=>"; ?>
            <div class="card-body text-white">
              <?php echo "<h5>$firstname $lastname</h5>"; ?>
            </div>
           </div>

          </div>

      <?php
      } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
    }
  }
       ?>

  </div>

</div>
