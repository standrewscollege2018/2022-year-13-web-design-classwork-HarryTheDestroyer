<?php
 if(isset($_SESSION['admin'])) {
  header("Location: index.php?page=adminpanel");
 }

 ?>

 <div class="container-fluid">
   <div class="row mt-3">
     <div class="col-12 col-sm-4">

        <form action="verify.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control" placeholder="Enter username">
              </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" placeholder="Password">
          </div>

          <?php
            if(isset($_GET['error'])) {
              ?>

              <div class="alert alert-danger" role="alert">
                Username or password is incorrect
              </div>

              <?php
            }
           ?>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
</div>
