<?php include('template/head.php'); ?>
  <body>
    <main>
      <?php include('template/header.php'); ?>

          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Witaj w XU - <?php echo $_SESSION['User'] ?> :)</h2>
            </div>
            <div class="row">
              <div class="col-md-6 py-3">
                <div class="h-100 p-5 text-white bg-basic rounded-3">
                  <h2>Zbuduj stronę!</h2>
                  <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've.</p>
                  <a href="sites.php"><button class="btn btn-outline-light" type="button">Edytuj swój serwis</button></a>
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="h-100 p-5 bg-light border rounded-3">
                  <h2>Zobacz nowości w XU!</h2>
                  <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've.</p>
                  <button class="btn btn-outline-secondary" type="button">Nowości w XU-CMS</button>
                </div>
              </div>
              <div class="col-sm-6 py-5">
                <div class="list-group">
                  <label class="list-group-item d-flex gap-3">
                    <p class="h4">Lista zadań:</p>
                  </label>
                  <label class="list-group-item d-flex gap-3 p-3">
                  <input class="form-check-input flex-shrink-0" type="checkbox" style="font-size: 1.375em;">
                  <span class="pt-1 form-checked-content">
                  <strong>Dodać podstrony</strong>
                  </span>
                  </label>
                  <label class="list-group-item d-flex gap-3 p-3">
                  <input class="form-check-input flex-shrink-0" type="checkbox" style="font-size: 1.375em;">
                  <span class="pt-1 form-checked-content">
                  <strong class="text-danger">Zadzwonić do Pana Andrzeja w sprawie dodania na stroę meta-tagów: TITLE i DESC</strong>
                  </span>
                  </label>
                  <label class="list-group-item d-flex gap-3 p-3">
                  <input class="form-check-input flex-shrink-0" type="checkbox" style="font-size: 1.375em;">
                  <span class="pt-1 form-checked-content">
                  <strong class="text-info">Wysłać do klienta #25236 paczkę</strong>
                  </span>
                  </label>
                  <label class="list-group-item d-flex gap-3 bg-light">
                  <input class="form-check-input form-check-input-placeholder bg-light flex-shrink-0" disabled="" type="checkbox" value="" style="font-size: 1.375em;">
                  <span class="pt-1 form-checked-content">
                  <span contenteditable="true" class="w-100">Dodaj zadanie</span>
                  </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <?php include('template/footer.php'); ?>
  </body>
</html>