<?php
require_once('xu-database.php');

if(isset($_GET['id']))
{
  $idSite = $_GET['id'];

  $sql = "select * from xu_sites where idSite='$idSite'";
  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($result);
  $mainSite = $row['mainSite'];
  $mainSiteTitle = $row['mainSiteTitle'];
  $mainSiteDesc = $row['mainSiteDesc'];
  $mainSiteRobots = $row['mainSiteRobots'];
  $mainSiteH1 = $row['mainSiteH1'];
  $mainSiteH2 = $row['mainSiteH2'];
  $mainSiteText1 = $row['mainSiteText1'];
  $mainSiteText2 = $row['mainSiteText2'];

  $query = "SELECT * FROM `xu-settings` where id=1";
  $result = mysqli_query($conn,$query);
  $result = mysqli_fetch_assoc($result);

  $brand = $result["brand"];
  $address = $result["address1"];
  $email1 = $result["email1"];
  $email2 = $result["email2"];
  $number = $result["number1"];
  
}
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="<?php echo $mainSiteRobots; ?>">
    <meta name="description" content="<?php echo $mainSiteDesc; ?>">
    <meta name="keywords" content="">
    <title><?php echo $mainSiteTitle; ?></title>
    <link rel="shortcut icon" href="xu-structure/images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="xu-structure/lib/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="xu-structure/css/main.css">
    <script src="xu-structure/lib/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <main>
      <!-- Navigation Section -->
      <nav class="navbar navbar-expand-lg bg-black navbar-dark fixed-top">
        <div class="container-fluid py-2 mx-4">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="brand-logo justify-content-start mx-4 text-white">
            <p class="h5"><?php echo $brand; ?></p>
          </div>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="/">Strona główna</a></li>
              <?php 
              
               require_once ('xu-database.php');

               $query = "select * from  xu_sites";
               $result = mysqli_query($conn,$query);

               while($row = mysqli_fetch_assoc($result))
               {
                 $mainSites = $row['mainSite'];
                 $linkSite = $row['linkSite'];
                 echo "<li class='nav-item'>
                    <a class='nav-link' href='{$linkSite}.html'>{$mainSites}</a>
                 </li>";
               }
              
              ?>
            </ul>
          </div>
          <a href="xu-admin/"><input class="btn btn-basic-bg justify-content-end" type="button" value="Panel" /></a>
        </div>
      </nav>
      <!-- Header Section -->
      <div class="position-relative overflow-hidden p-3 p-md-5 text-center text-white bg-black">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img src="https://www.techdee.com/wp-content/uploads/2020/05/avatoon_hero_header_cartoon_01.png" width="280px" alt="">
          <h1 class="display-4 fw-normal "><?php echo $mainSiteH1; ?></h1>
          <p class="lead fw-normal text-purple"><?php echo $mainSiteText1; ?></p>
        </div>
      </div>
        <div class="navBar bg-gray text-white">
            <div class="container">
            </nav>
                <nav class="py-3">
                    <a href="/"><span class="d-none d-md-inline-block">Strona główna</span></a>
                    <span class="d-none d-md-inline-block">-> <?php echo $mainSite; ?></span>
                </nav>
            </div>
        </div>
      <!-- Main content -->
      <div class="main-content my-5">
        <div class="container">
            <h2><?php echo $mainSiteH2; ?></h2>
            <p class="py-sm-4">
            <?php echo $mainSiteText2; ?>
            </p>
            </div>
        </div>
      </div>
      <?php include('xu-structure/include/footer.php'); ?>