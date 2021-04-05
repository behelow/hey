<!-- header -->
<?php require('/include/header.inc.php'); ?>
    <!-- Navbar -->
    <?php include('/include/navbar.inc.php'); ?>

    <!-- Content - login Box -->
    <div class="container-fluid hero-container">
      <!-- card box -->
      <div class="card-box">
        <div class="container content-left">
            <a class="mybrand" href="#"><img src="/asset/img/logo.png" alt="" height="20px" /></a>
              <h1 class="m-s">Welcome, Friend!</h1>
              <p class="m-s">Enter your personal details<br />and start journey with us</p>
              <a href="login.php"><button class="btn-ls m-s">Log in</button></a>
            </div>
            <div class="container login-content">
              <h1>Sign in</h1>
            <ul class="social-link">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a></i></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
            <p>or use your email for registration</p>
            <form class="registration" action="">
              <div class="field">
              <input type="text" name="name" placeholder="Full name..." autocomplete="off" required/>
              </div>
              <div class="field">
              <input type="email" name="email" placeholder="Email..." autocomplete="off" required/>
              </div>
              <div class="field">
              <input type="password" name="password" placeholder="Password..." required/>
              </div>
              <div class="field">
              <input type="password" name="password-repeat" placeholder=" Repeat password..." required/>
              </div>
              <button class="btn-ls btn-form m-s" type="submit" name="submit">Sign up</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Content - login Box -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- CSS Style -->

<!-- Footer include -->
<?php require('../htdocs/login_system/include/footer.inc.php'); ?>
