<?php
    require('xu-database.php');
    
    $query = "SELECT * FROM `xu-settings` where id=1";
    $result = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($result);

    $brand = $result["brand"];
    $address = $result["address1"];
    $email1 = $result["email1"];
    $email2 = $result["email2"];
    $number = $result["number1"];
    
  ?>
<?php include('xu-structure/include/head.php'); ?>
<?php include('xu-structure/include/header.php'); ?>
      <!-- Header Section -->
      <div class="position-relative overflow-hidden p-3 p-md-5 text-center text-white bg-header">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal "><?php echo $brand; ?></h1>
          <p class="lead fw-normal">Nowoczesny i intuicyjny CMS dla CIEBIE! Budowanie i optymalizacja serwisu nie była jeszcze tak prosta jak teraz.</p>
          <button class="btn btn-basic-bg btn-lg" type="button">Download</button>
        </div>
      </div>
      
      <!-- Main content -->
      <div class="main-content my-5">
        <div class="container">
          <!-- Desc Section -->
          <div class="main-aboutus my-5">
            <div class="row align-items-md-stretch">
              <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-basic-v2 rounded-3">
                  <h2>About us</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <button class="btn btn-outline-light" type="button">See more...</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="h-100 p-5 bg-light border-basic border-basic-gradient rounded-3">
                  <h2>Contact</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <button class="btn btn-outline-secondary" type="button">Contact</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Articles Section -->
          <div class="main-content-article border-top border-3">
            <div class="row">
              <div class="col-sm-12">

                <?php
                  require_once ('xu-database.php');

                  $query = "select * from xu_article order by articleDate desc limit 3";
                  $data = mysqli_query($conn, $query);

                  while($row = mysqli_fetch_assoc($data))
                  {
                    $articleTitle = $row['articleTitle'];
                    $articleAuthor = $row['articleAuthor'];
                    $articleDate = $row['articleDate'];
                    $articleContent = $row['articleContent'];
                    $articleImg = $row['articleImg'];
                ?>

                <div class="content-article-item">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="content-article-data text-purple"><span><?php echo $articleDate; ?></span> - <span><?php echo $articleAuthor; ?></span></div>
                      <div class="content-article-title">
                        <h2><?php echo $articleTitle; ?></h2>
                      </div>
                      <div class="content-atricle-desc">
                        <p><?php echo $articleContent; ?></p>
                      </div>
                      <!-- <button class="btn btn-basic-bg" type="button">See more...</button> -->
                    </div>
                    <div class="col-sm-6 content-article-img my-4"><img src="xu-structure/images/article/<?php echo $articleImg; ?>" alt="Artykuł#1"></div>
                  </div>
                </div>

                <?php } ?>
                
              </div>
            </div>
          </div>
          <!-- offer -->
        </div>
        <div class="main-offer bg-black text-white">
          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-lg-6">
                <h2 class="display-5 fw-bold lh-1 border-basic border-basic-gradient p-4">Zobacz plany ofertowe naszego CMS`a</h2>
                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                <div class="justify-content-md-start">
                  <button type="button" class="btn btn-basic btn-lg px-4">Plan PRO</button>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="xu-structure/images/background/offer.jpg" class="d-block mx-lg-auto img-fluid" alt="xu-cms plan pro">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include('xu-structure/include/footer.php'); ?>