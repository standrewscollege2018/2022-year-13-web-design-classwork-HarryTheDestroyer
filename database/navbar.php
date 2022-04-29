<?php

$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
 ?>


     <nav class="navbar navbar-expand-lg custom-nav">

       <div class="container-fluid">
         <a class="navbar-brand" href="index.php">St Andrew's College</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">

           <ul class="navbar-nav me-auto mb-2 mb-lg-0">

           <li class="nav-item">
               <a class="nav-link" href="index.php?page=login">Admin</a>
            </li>

             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tutor Groups</a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                 <?php
                   do {
                     $tutorgroupID = $tutor_aa['tutorgroupID'];
                     $tutorcode = $tutor_aa['tutorcode'];

                     echo "<li><a class='dropdown-item' href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a></li>";

                    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
                 ?>

               </ul>
             </li>

             <li>
               <?php

               if(isset($_SESSION['admin'])){
                 echo "<a class='nav-link' href='logout.php'>Log out</a>";
               }
                ?>
             </li>

           </ul>

               <form class="" action="index.php?page=searchresults" method="post">
                 <input required type="text" name="search" placeholder="Student name">
                 <button type="submit" name="button">Search</button>
               </form>

           </div>

         </div>
       </div>
     </nav>
