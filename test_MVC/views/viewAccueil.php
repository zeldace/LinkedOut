<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>LinkedOut</title>
  <link rel="stylesheet" href="mystyle3.css">
  <link rel="manifest" href="manifest.json">
  <link rel="icon" type="image" href="favicon.png">
  <!--<link rel="stylesheet" href="C:\www\projet web\projet web\LinkedOut\test_MVC\assets\vendors\bootstrap\bootstrap-5.1.3-dist\bootstrap-5.1.3-dist\css">-->
  <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
  <script src="https://kit.fontawesome.com/a03e1e1400.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <div class="nav">
        <div class="titre">
          <h1>LinkedOut</h1>
        </div>
      </div>
    </nav>
  </header>
  <!--begin sign on form-->
  <main class="form-signin">
    <form action="login" method="POST">
      <h1 class="h3 mb-3 fw-normal">Please log in</h1>

      <div class="form-floating">
        <label for="floatingInput">Email address</label>
        <input class="form-control" id="floatingInput" placeholder="name@example.com" name='username'>
      </div>
      <div class="form-floating">
        <label for="floatingPassword">Password</label>
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='password'>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>

    </form>
  </main>
  <!--begin footer-->
  <div class="footer-clean">
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-4 col-md-3 item">
            <h3>For Job Seekers</h3>
            <ul>
              <li><a href="#">Browse Jobs</a></li>
              <li><a href="#">Salary Tools</a></li>
              <li><a href="#">Career Advices</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-3 item">
            <h3>For Employees</h3>
            <ul>
              <li><a href="#">Products</a></li>
              <li><a href="#">Solutions</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-3 item">
            <h3>Helpful Ressources</h3>
            <ul>
              <li><a href="#">About LinkedOut</a></li>
              <li><a href="#">Work for LinkedOut</a></li>
              <li><a href="#">Terms of use</a></li>
            </ul>
          </div>
          <div class="col-lg-3 item social"><a href="#"><i class="fa-brands fa-facebook-f"></i></i></a><a href="#"><i
                class="fa-brands fa-twitter"></i></i></a><a href="#"><i class="fa-brands fa-snapchat"></i></a><a
              href="#"><i class="fa-brands fa-instagram"></i></a>
            <p class="copyright">LinkedOut © 2022</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--test de git-->
</body>
<!-- réponse test-->
