<?php include('template/head.php'); ?>
  <body>
    <main>
      <?php include('template/header.php'); ?>
      <?php 

        require_once ('../xu-database.php');

        if(isset($_POST['articleAdd']))
        {
            $articleCategoryID = $_POST['articleCategoryID'];
            $articleTitle = $_POST['articleTitle'];
            $articleTags = $_POST['articleTags'];
            $articleDate = $_POST['articleDate'];
            $articleAuthor = $_POST['articleAuthor'];
            $articleImg = $_POST['articleImg'];
            $articleStatus = $_POST['articleStatus'];

            $sql = "insert into xu_article (articleCategoryID, articleTitle, articleTags, articleDate, articleAuthor, articleImg, articleStatus) values('$articleCategoryID', '$articleTitle', '$articleTags', '$articleDate', '$articleAuthor', '$articleImg', '$articleStatus')";

            $result = mysqli_query($conn,$sql);

            if ($result){
                header("location: blog.php");
            }
        }
      
      ?>
          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Dodawanie Artkułu</h2>
            </div>
            <div class="col-sm-12">
              <div class="shadow-lg p-3 mb-5 bg-body rounded border border-1">
                <form action="" method="post">
                  <label>Nazwa artykułu</label>
                  <input type="text" class="form-control my-3" name="articleTitle" value="" required/>
                  <label>Kategoria</label>
                  <input type="text" class="form-control my-3" name="articleCategoryID" value=""/>
                  <label>Tag</label>
                  <input type="text" class="form-control my-3" name="articleTags" value="" />
                  <label>Data</label>
                  <input type="date" class="form-control my-3" name="articleDate" value="" required/>
                  <label>Autor</label>
                  <input type="text" class="form-control my-3" name="articleAuthor" value="" required/>
                  <label>Zdjęcie</label>
                  <input type="file" class="form-control my-3" name="articleImg" value=""/>
                  <label for="articleStatus">Status</label>
                  <select class="form-select my-3" name="articleStatus">
                    <option>Public</option>
                    <option>Draft</option>
                  </select>
                  <hr class="my-4" />

                  <label class="my-2 fw-bold">Opis artykułu</label>
                    <textarea name="articleContent">
                    </textarea>

                  <input type="submit" class="btn btn-basic my-3" name="articleAdd" value="Dodaj">
                </form>
              </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('template/footer.php'); ?>
  </body>
</html>