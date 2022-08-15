<?php include('template/head.php'); ?>
  <body>
    <main>
    <?php include('template/header.php'); ?>
          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Ustawienia Konta</h2>
            </div>
            <div class="col-sm-12">
              <div class="shadow-lg p-3 mb-5 bg-body rounded border border-1">
                <form action="" method="post">
                  <label for="login"">Nazwa użytkownika</label>
                  <input type="text" class="form-control my-3" name="login" id="login"" value="<?php echo $_SESSION['User'] ?>" />
                  <label for="password">Hasło</label>
                  <input type="password" class="form-control my-3" name="password" id="password" value="admin"/>
                  <label for="group">Rola</label>
                  <input type="button" class="form-control my-3 btn-danger" name="group" id="group" value="Administrator" />
                  <label for="avatar">Avatar( opcja niedostepna w wersji podstawowej )</label>
                  <input type="file" class="form-control my-3" name="avatar" id="avatar"/>
                  <input type="submit" class="btn btn-basic my-3" value="Zapisz ustawienia">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('template/footer.php'); ?>
  </body>
</html>