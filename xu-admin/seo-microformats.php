<?php include('template/head.php'); ?>
  <body>
    <main>
    <?php include('template/header.php'); ?>
          <div class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Ustawienia Mikrofotmatów</h2>
            </div>
            <div class="col-sm-12">
              <div class="shadow-lg p-3 mb-5 bg-body rounded border border-1">
                <form action="" method="post">
                  <label for="Brand">Kod JSON</label>
                  <form method="post">
                    <textarea id="mytextarea" name="mytextarea">
                    {
                    "@context": "https://schema.org/",
                    "@type": "JobPosting",
                    "title": "",
                    "description": "",
                    "hiringOrganization" : {
                      "@type": "Organization",
                      "name": ""
                    },
                    "datePosted": "",
                    "validThrough": "",
                    "jobLocation": {
                      "@type": "Place",
                      "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "",
                        "addressLocality": "",
                        "postalCode": "",
                        "addressCountry": ""
                      }
                    }
                  }
                    </textarea>
                  </form>
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