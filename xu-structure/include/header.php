<body>
    <?php
    require_once ('xu-database.php');

    $query = "SELECT * FROM `xu-settings` where id=1";
    $result = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($result);
    
    $brand = $result["brand"];
    $address = $result["address1"];
    $email1 = $result["email1"];
    $email2 = $result["email2"];
    $number = $result["number1"];
    ?>
    <main>
      <!-- Navigation Section -->
      <nav class="navbar navbar-expand-lg bg-black navbar-dark fixed-top">
        <div class="container-fluid py-2 mx-4">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="brand-logo justify-content-start mx-4 text-white">
            <p class="h5"><?php echo $result["brand"]; ?></p>
          </div>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" href="/">Strona główna</a></li>
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