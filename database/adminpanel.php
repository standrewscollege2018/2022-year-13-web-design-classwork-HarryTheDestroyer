<?php

if(!isset($_SESSION['admin'])){
  header("Location: index.php");
}
 ?>

<div class="container-fluid">
  <div class="row mt-3 text-white">

    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <img src="images/5691.jpg" alt="">
        <div class="card-body">
          <h5>Add a tutor here</h5>
          <p class="card-text"><a class="btn btn-primary" href="index.php?page=addtutor">Go </a></p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <img src="images/download.jpg" alt="">
        <div class="card-body">
          <h5>Add a student here</h5>
          <p class="card-text"><a class="btn btn-primary" href="index.php?page=addstudent">Go </a></p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <img src="images/death1.jpg" alt="">
        <div class="card-body">
          <h5>Remove a student here</h5>
          <p class="card-text"><a class="btn btn-primary" href="index.php?page=deletestudentselect">Go </a></p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <img src="images/edit1.jpg" alt="">
        <div class="card-body">
          <h5>Edit a student's details here</h5>
          <p class="card-text"><a class="btn btn-primary" href="index.php?page=addtutor">Go </a></p>
        </div>
      </div>
    </div>

  </div>
</div>
