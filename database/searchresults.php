<div class="container-fluid">
  <div class="row g-3 pt-3">
<?php
  if(!isset($_POST['search'])) {
    header("Location: search.php");
  }
  $search = $_POST['search'];

  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  $result_qry = mysqli_query($dbconnect, $result_sql);

  if(mysqli_num_rows($result_qry)==0) {
      echo "<h1>No results found</h1>";
    } else {
      $result_aa = mysqli_fetch_assoc($result_qry);


       do {
         $firstname = $result_aa['firstname'];
         $lastname = $result_aa['lastname'];
         $photo = $result_aa['photo'];
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
      } while ($result_aa = mysqli_fetch_assoc($result_qry));
    }

           ?>

  </div>

</div>
