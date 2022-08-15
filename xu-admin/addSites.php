<?php include('template/head.php'); ?>
  <body>
    <main>
      <?php include('template/header.php'); ?>
      <?php 

        require_once ('../xu-database.php');

        if(isset($_POST['mainSiteAdd']))
        {
            $mainSite = $_POST['mainSite'];
            $mainSiteTitle = $_POST['mainSiteTitle'];
            $mainSiteDesc = $_POST['mainSiteDesc'];
            $mainSiteRobots = $_POST['mainSiteRobots'];
            $mainSiteH1 = $_POST['mainSiteH1'];
            $mainSiteH2 = $_POST['mainSiteH2'];
            $mainSiteText1 = $_POST['mainSiteText1'];
            $mainSiteText2 = $_POST['mainSiteText2'];
            $linkSite = $_POST['linkSite'];

            $sql = "insert into xu_sites (mainSite, mainSiteTitle, mainSiteDesc, mainSiteRobots, mainSiteH1, mainSiteH2, mainSiteText1, mainSiteText2, linkSite) values('$mainSite', '$mainSiteTitle', '$mainSiteDesc', '$mainSiteRobots', '$mainSiteH1', '$mainSiteH2', '$mainSiteText1', '$mainSiteText2', '$linkSite')";

            $result = mysqli_query($conn,$sql);
            require_once('include/generateStatic.php');

            generateSite($conn->insert_id);

            if ($result){
                // header("location: sites.php");
            }
        }
      
      ?>
          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Dodawanie strony</h2>
            </div>
            <div class="col-sm-12">
              <div class="shadow-lg p-3 mb-5 bg-body rounded border border-1">
                <form action="" method="post">
                  <label>Nazwa strony</label>
                  <input type="text" class="form-control my-3" name="mainSite" value="" required/>
                  <label>Meta-Title( min.: 70 )</label>
                  <input type="text" class="form-control my-3" name="mainSiteTitle" value="" required/>
                  <label>Meta-Desc ( min.: 160 )</label>
                  <input type="text" class="form-control my-3" name="mainSiteDesc" value="" />
                  <label>Bezpośredni odnośnik strony</label>
                  <input type="text" class="form-control my-3" name="linkSite" id="linkSite" value="" required/>
                  <label for="mainSiteRobots">Meta-Robots</label>
                  <select class="form-select my-3" name="mainSiteRobots">
                    <option value="mainSiteRobots">index, follow</option>
                    <option value="mainSiteRobots">index, nofollow</option>
                    <option value="mainSiteeRobots">noindex, follow</option>
                    <option value="mainSiteRobots">noindex, nofollow</option>
                  </select>
                  <hr class="my-4" />

                  <label class="my-2 fw-bold">Nagłówek H1</label>
                  <input type="text" class="form-control my-3" name="mainSiteH1" value="" />
                  <label class="my-3 fw-bold">Opis - pod nagłówkiem H1</label>
                    <textarea name="mainSiteText1">
                    </textarea>

                  <label class="my-2 fw-bold">Nagłówek H2</label>
                  <input type="text" class="form-control my-3" name="mainSiteH2" value="" />
                  <label class="my-3 fw-bold">Treści - pod nagłówkiem H2</label>
                    <textarea name="mainSiteText2">
                    </textarea>


                  <input type="submit" class="btn btn-basic my-3" name="mainSiteAdd" value="Dodaj">
                </form>
              </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('template/footer.php'); ?>
  </body>
</html>