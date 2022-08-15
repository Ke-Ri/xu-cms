<?php 

require_once ('../xu-database.php');


if(isset($_GET['id']))
{
  $idSite = $_GET['id'];
  
  if(isset($_POST['mainSiteUpdate']))
  {
    $mainSite = $_POST['mainSite'];
    $mainSiteTitle = $_POST['mainSiteTitle'];
    $mainSiteDesc = $_POST['mainSiteDesc'];
    $mainSiteRobots = $_POST['mainSiteRobots'];
    $mainSiteH1 = $_POST['mainSiteH1'];
    $mainSiteH2 = $_POST['mainSiteH2'];
    $mainSiteText1 = $_POST['mainSiteText1'];
    $mainSiteText2 = $_POST['mainSiteText2'];

    $sql = "update xu_sites set mainSite='$mainSite',  mainSiteTitle='$mainSiteTitle', mainSiteDesc='$mainSiteDesc', mainSiteRobots='$mainSiteRobots', mainSiteH1='$mainSiteH1', mainSiteH2='$mainSiteH2', mainSiteText1='$mainSiteText1', mainSiteText2='$mainSiteText2'
  
    where idSite='$idSite'";
    
    $result = mysqli_query($conn,$sql);
    require_once('include/generateStatic.php');
    generateSite($idSite);    
  }

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
}

?>

<?php include('template/head.php'); ?>
  <body>
    <main>
      <?php include('template/header.php'); ?>
          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Edycja strony: <?php echo $mainSite; ?></h2>
            </div>
            <div class="col-sm-12">
              <div class="shadow-lg p-3 mb-5 bg-body rounded border border-1">
                <form method="post">
                  <label>Nazwa strony</label>
                  <input type="text" class="form-control my-3" name="mainSite" value="<?php echo $mainSite; ?>" />
                  <label>Meta-Title( min.: 70 )</label>
                  <input type="text" class="form-control my-3" name="mainSiteTitle" value="<?php echo $mainSiteTitle; ?>" />
                  <label>Meta-Desc ( min.: 160 )</label>
                  <input type="text" class="form-control my-3" name="mainSiteDesc" value="<?php echo $mainSiteDesc; ?>" />
                  <label for="mainSiteRobots">Meta-Robots</label>
                  <select class="form-select my-3" name="mainSiteRobots" id="mainSiteRobots">
                    <option>index, follow</option>
                    <option>index, nofollow</option>
                    <option>noindex, follow</option>
                    <option>noindex, nofollow</option>
                  </select>
                  <hr class="my-4" />

                  <label class="my-2 fw-bold">Nagłówek H1</label>
                  <input type="text" class="form-control my-3" name="mainSiteH1" value="<?php echo $mainSiteH1; ?>" />
                  <label class="my-3 fw-bold">Opis - pod nagłówkiem H1</label>
                    <textarea name="mainSiteText1">
                      <?php echo $mainSiteText1; ?>
                    </textarea>

                  <label class="my-2 fw-bold">Nagłówek H2</label>
                  <input type="text" class="form-control my-3" name="mainSiteH2" value="<?php echo $mainSiteH2; ?>" />
                  <label class="my-3 fw-bold">Treści - pod nagłówkiem H2</label>
                  <textarea name="mainSiteText2">
                      <?php echo $mainSiteText2; ?>
                  </textarea>
                  
                  <input type="submit" class="btn btn-basic my-3" name="mainSiteUpdate" value="Zapisz ustawienia">
                </form>
              </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('template/footer.php'); ?>
  </body>
</html>