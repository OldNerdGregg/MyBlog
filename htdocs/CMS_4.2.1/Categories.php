<?php require_once("./Includes/DB.php"); ?>
<?php require_once("./Includes/Functions.php"); ?>
<?php require_once("./Includes/Sessions.php"); ?>
<?php
  if(isset($_POST["Submit"])){
  $Category = $_POST["CategoryTitle"];
// Validation Check for Empty Fields
  if(empty($Category)){
    $_SESSION["ErrorMessage"]= "All Fields must be filled out";
    Redirect_to("Categories.php");
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./fontawesome-free-5.9.0-web/css/all.css">
  <title>Categories</title>
</head>
<body>
  <!-- NAVBAR -->
  <div style="height:10px; background:#27aae1;"></div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-brand"> GREGG&period;WORK</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="MyProfile.php" class="nav-link"> <i class="fas fa-user text-success"></i> My Profile</a>
        </li>
        <li class="nav-item">
          <a href="Dashboard.php" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
          <a href="Posts.php" class="nav-link">Posts</a>
        </li>
        <li class="nav-item">
          <a href="Categories.php" class="nav-link">Categories</a>
        </li>
        <li class="nav-item">
          <a href="Admins.php" class="nav-link">Manage Admins</a>
        </li>
        <li class="nav-item">
          <a href="Comments.php" class="nav-link">Comments</a>
        </li>
        <li class="nav-item">
          <a href="Blog.php?page=1" class="nav-link" target="_blank">Live Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="Logout.php" class="nav-link text-danger">
          <i class="fas fa-user-times"></i> Logout</a></li>
      </ul> <!-- End LOGOUT Link -->
      </div> <!-- end navbar toggler collapse -->
    </div>
  </nav>
    <div style="height:10px; background:#27aae1;"></div>
    <!-- NAVBAR END -->
    <!-- HEADER -->
<header class="bg-dark text-white py-3"> <!-- py-5 == padding on y access, power 5 -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h1><i class="fas fa-edit" style="color: skyblue;"></i> Manage Categories</h1>
      </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
  </div> <!-- end container -->
</header>
  <!-- HEADER END -->


    <!-- Main Area -->
<section class="container py-2 mb-4">
<div class="row">
  <div class="offset-lg-1 col-lg-10" style="min-height: 400px;">
    <form class="" action="Categories.php" method="post">
      <div class="card bg-secondary text-light mb-3">
        <div class="card-header">
          <h1>Add New Category</h1>
        </div> <!-- end card-header -->
        <div class="card-body bg-dark">
          <div class="form-group">
            <label class="FieldInfo" for="title"><span class="FieldInfo"></span> Category Title&colon; </label>
            <input class="form-control" type="text" name="CategoryTitle" id="title" placeholder="Type Title Here" value="">
          </div>
          <div class="row">
            <div class="col-lg-6 mb-2">
              <a href="Dashboard.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
            </div>
            <div class="col-lg-6 mb-2">
              <button type="button" name="Submit" class="btn btn-success btn-block">
                <i class="fas fa-check"></i> Publish
              </button>

            </div>
          </div>


        </div> <!-- end card-body -->
      </div>
    </form>
  </div>
</div>

</section>



    <!-- End Main Area -->
        <!-- FOOTER -->
        <footer class="bg-dark text-white">
          <div class="container">
            <div class="row">
              <div class="col">
              <p class="lead text-center">Theme By | Jazeb Akram | <span id="year"></span> &copy; ----All right Reserved.  <em>Modified by Gregg Russell for tutorial purposes</em></p>
              <p class="text-center small"><a style="color: white; text-decoration: none; cursor: pointer;" href="http://jazebakram.com/coupons/" target="_blank"> This site is only used for Study purpose jazebakram.com have all the rights. no one is allow to distribute copies other then <br>&trade; jazebakram.com &trade;  Udemy ; &trade; Skillshare ; &trade; StackSkills</a></p>

               </div>
             </div>
          </div>
        </footer>
            <div style="height:10px; background:#27aae1;"></div>
        <!-- FOOTER END-->

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
      $('#year').text(new Date().getFullYear());
    </script>
    </body>
    </html>
