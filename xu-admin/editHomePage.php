<?php 

require_once ('../xu-database.php');

  
  if(isset($_POST['homePageUpdate']))
  {
    $homePageTitle = $_POST['homePageTitle'];
    $homePageDesc = $_POST['homePageDesc'];
    $homePageRobots = $_POST['homePageRobots'];
    $homePageH2 = $_POST['homePageH2'];
    $homePageText = $_POST['homePageText'];

    $sql = "update `xu_home` set homePageTitle='$homePageTitle', homePageDesc='$homePageDesc', homePageRobots='$homePageRobots', homePageH2='$homePageH2', homePageText='$homePageText' where homePageID='1'";
    
    $result = mysqli_query($conn,$sql);  
  }

  $sql = "select * from `xu_home` where homePageID='1'";
  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($result);
  $homePageTitle = $row['homePageTitle'];
  $homePageDesc = $row['homePageDesc'];
  $homePageRobots = $row['homePageRobots'];
  $homePageH2 = $row['homePageH2'];
  $homePageText = $row['homePageText'];
  


?>

<?php include('template/head.php'); ?>
  <body>
    <main>
      <?php include('template/header.php'); ?>
          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Edycja strony: <?php  echo "Strona główna" ?></h2>
            </div>
            <div class="col-sm-12">
              <div class="shadow-lg p-3 mb-5 bg-body rounded border border-1">
                <form method="post">
                  <label>Nazwa strony</label>
                  <input type="text" class="form-control my-3" name="mainSite" value="<?php echo "Strona główna" ?>" disabled/>
                  <label>Meta-Title( min.: 70 )</label>
                  <input type="text" class="form-control my-3" name="homePageTitle" value="<?php echo $homePageTitle; ?>" />
                  <label>Meta-Desc ( min.: 160 )</label>
                  <input type="text" class="form-control my-3" name="homePageDesc" value="<?php echo $homePageDesc; ?>" />
                  <label for="homePageRobots">Meta-Robots</label>
                  <select class="form-select my-3" name="homePageRobots" id="homePageRobots">
                    <option>index, follow</option>
                    <option>index, nofollow</option>
                    <option>noindex, follow</option>
                    <option>noindex, nofollow</option>
                  </select>
                  <hr class="my-4" />

                  <label class="my-2 fw-bold">Nagłówek H1</label>
                  <input type="text" class="form-control my-3" name="homePageH2" value="<?php echo $homePageH2; ?>" />
                  <label class="my-3 fw-bold">Opis - pod nagłówkiem H1</label>
                    <textarea name="homePageText">
                      <?php echo $homePageText; ?>
                    </textarea>
                  
                  <input type="submit" class="btn btn-basic my-3" name="homePageUpdate" value="Zapisz ustawienia">
                </form>
              </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('template/footer.php'); ?>
  </body>
</html>