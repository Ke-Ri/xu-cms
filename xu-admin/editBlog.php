<?php 

require_once ('../xu-database.php');


if(isset($_GET['id']))
{
  $articleID = $_GET['id'];
  
  if(isset($_POST['articleUpdate']))
  {
    $articleCategoryID = $_POST['articleCategoryID'];
    $articleTitle = $_POST['articleTitle'];
    $articleTags = $_POST['articleTags'];
    $articleDate = $_POST['articleDate'];
    $articleAuthor = $_POST['articleAuthor'];
    $articleImg = $_POST['articleImg'];
    $articleStatus = $_POST['articleStatus'];
    $articleContent = $_POST['articleContent'];

    $sql = "update `xu_article` set articleCategoryID='$articleCategoryID',  articleTitle='$articleTitle', articleTags='$articleTags', articleDate='$articleDate', articleAuthor='$articleAuthor', articleImg='$articleImg', articleStatus='$articleStatus'
  
    where articleID='$articleID'";
    
    $result = mysqli_query($conn,$sql);
  }

  $sql = "select * from `xu_article` where articleID='$articleID'";
  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($result);
  $articleCategoryID = $row['articleCategoryID'];
  $articleTitle = $row['articleTitle'];
  $articleTags = $row['articleTags'];
  $articleDate = $row['articleDate'];
  $articleAuthor = $row['articleAuthor'];
  $articleImg = $row['articleImg'];
  $articleStatus = $row['articleStatus'];
  $articleContent = $row['articleContent'];
}

?>

<?php include('template/head.php'); ?>
  <body>
    <main>
      <?php include('template/header.php'); ?>
          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Edycja artykułu</h2>
            </div>
            <div class="col-sm-12">
              <div class="shadow-lg p-3 mb-5 bg-body rounded border border-1">
                <form action="" method="post">
                  <label>Nazwa artykułu</label>
                  <input type="text" class="form-control my-3" name="articleTitle" value="<?php echo $articleTitle; ?>" required/>
                  <label>Kategoria</label>
                  <input type="text" class="form-control my-3" name="articleCategoryID" value="<?php echo $articleCategoryID; ?>"/>
                  <label>Tag</label>
                  <input type="text" class="form-control my-3" name="articleTags" value="<?php echo $articleTags; ?>" />
                  <label>Data</label>
                  <input type="date" class="form-control my-3" name="articleDate" value="<?php echo $articleDate; ?>" required/>
                  <label>Autor</label>
                  <input type="text" class="form-control my-3" name="articleAuthor" value="<?php echo $articleAuthor; ?>" required/>
                  <label>Zdjęcie</label>
                  <input type="file" class="form-control my-3" name="articleImg" value="<?php echo $articleImg; ?>"/>
                  <label for="articleStatus">Status</label>
                  <select class="form-select my-3" name="articleStatus">
                    <option>Public</option>
                    <option>Draft</option>
                  </select>
                  <hr class="my-4" />

                  <label class="my-2 fw-bold">Opis artykułu</label>
                    <textarea name="articleContent">
                    <?php echo $articleContent; ?>
                    </textarea>

                  <input type="submit" class="btn btn-basic my-3" name="articleUpdate" value="Zapisz ustawienia">
                </form>
              </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('template/footer.php'); ?>
  </body>
</html>