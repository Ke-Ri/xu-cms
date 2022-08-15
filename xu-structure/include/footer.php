
     <!-- Footer Section -->
      <div class="container">
        <footer class="py-5">
          <div class="row">
            <div class="col-sm-3">
              <div class="brand-address text-center p-3">
                <p class="h1"><?php echo $brand; ?></p>
                <p><?php echo $address; ?></p>
              </div>
            </div>
            <div class="col-sm-3 my-2 ">
              <p class="h5">Kontakt</p>
              <div class="flex-column">
                <p class="my-2">Contact Service: <?php echo $email1; ?></p>
                <p class="my-2">Contact Developer: <?php echo $email2; ?></p>
                <p class="my-2">Nr. tel.: <?php echo $number; ?></p>
              </div>
            </div>
            <div class="col-sm-2 my-1 border-end">
              <p class="h5">Menu</p>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <?php 
              
              require_once ('xu-database.php');

              $query = "select * from  xu_sites";
              $result = mysqli_query($conn,$query);

              while($row = mysqli_fetch_assoc($result))
              {
                $mainSites = $row['mainSite'];
                $linkSite = $row['linkSite'];
                echo "<li class='nav-item mb-2'>
                   <a class='nav-link p-0 text-muted' href='{$linkSite}.html'>{$mainSites}</a>
                </li>";
              }
             
             ?>
              </ul>
            </div>
            <div class="col-sm-3 my-2">
              <form>
                <p class="h5">Newsletter</p>
                <p>Dołącz do naszego Newslettera.</p>
                <div class="d-flex w-100 gap-2">
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-basic-bg" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
          <div class="text-start py-4 my-4 border-top">
            <p>© 2022 <b><?php echo $brand; ?></b> - Karol Kornosz | All rights reserved.</p>
          </div>
        </footer>
      </div>
    </main>
  </body>
</html>