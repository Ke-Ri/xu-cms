<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Login | X̶U̶-̶C̶M̶S̶</title>
    <link rel="shortcut icon" href="../xu-structure/images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../xu-structure/lib/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../xu-structure/css/main.css" />
    <link rel="stylesheet" href="../xu-structure/css/style.min.login.css" />
    <script src="../xu-structure/lib/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <main>
      <div class="login-bg">
        <br /><br /> <!-- Tymczasowe bry-->
        <div class="container">
          <div class="login-box-main text-white shadow-lg">
            <div class="row">
              <div class="col-xl-8">
                <div class="login-box-images"></div>
              </div>
              <div class="col-xl-4 text-center">
                <?php if(@$_GET['Empty']==true){ ?>
                    <div class="text-danger"><?php echo $_GET['Empty']?></div>
                <?php
                    }
                ?>

                <?php if(@$_GET['Invalid']==true){ ?>
                    <div class="text-danger"><?php echo $_GET['Invalid']?></div>
                <?php
                    }
                ?>
                <form action="auth.php" method="post">
                  <div class="login-box">
                    <div class="login-box-title">
                      <h3 class="text-purple">PANEL XU</h3>
                    </div>
                    <div class="login-box-desc">
                      <p class="text-purple">"xu-cms nowoczesność w optymalizacji!"</p>
                    </div>
                    <div class="login-box-login p-4">
                      <input class="input-login mb-4 p-1 form-control" type="text" name="username" id="password" placeholder="Username"/>
                      <input class="input-login mb-4 p-1 form-control" type="password" name="password" id="password" placeholder="Password"/>
                      <div class="row mb-4">
                        <div class="col-sm-6 text-start">
                          <input type="checkbox" name="" id="">
                          <label class="text-purple">Remember</label>
                        </div>
                        <div class="col-sm-6 text-end">
                          <a href="../">Powrót</a>
                        </div>
                      </div>
                      <input class="btn btn-basic" type="submit" name="login"value="LOGIN" />
                    </div>
                  </div>
                </form>
                <footer class="text-dark">
                  <p>© 2021 <b>XU-CMS</b> - Karol Kornosz | All rights reserved.</p>
                </footer>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>