<?php

if(!isset($_SESSION['admin'])){
  header("Location: index.php");
}
 ?>

 <div class="container-fluid">

  <div class="row">

    <div class="col p-3">
      <p class="display-5">Enter new student</p>

      <form class="" action="index.php?page=enterstudent" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="firstname" class="form-label">First name</label>
          <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstname">
        </div>

        <div class="mb-3">
          <label for="lastname" class="form-label">Last name</label>
          <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastname">
        </div>

        <div class="mb-3">
          <?php
            $tutorgroup_sql = "SELECT * FROM tutorgroup";
            $tutorgroup_qry = mysqli_query($dbconnect, $tutorgroup_sql);
            $tutorgroup_aa = mysqli_fetch_assoc($tutorgroup_qry);
           ?>
           <label for="tutorcode" class="form-label">Select tutor group</label>
           <select name="tutorgroupID" class="form-select" aria-label="tutorgroup">

           <?php
            do {
              $tutorgroupID = $tutorgroup_aa['tutorgroupID'];
              $tutorcode = $tutorgroup_aa['tutorcode'];
              echo "<option value=$tutorgroupID>$tutorcode</option>";
            } while ($tutorgroup_aa = mysqli_fetch_assoc($tutorgroup_qry))
            ?>

           </select>
        </div>

        <div class="mb-3">
          <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
          </div>

        <div class="mb-3">
          <?php
            if(isset($_GET['error'])) {
              ?>
              <div class="alert alert-danger" role="alert">
                Please enter both first and last names and upload a photo
              </div>
              <?php
                          }
           ?>
           
        </div>
        <button type="submit" name="button" class="btn btn-primary">Add student</button>
      </form>

    </div>
  </div>
</div>
