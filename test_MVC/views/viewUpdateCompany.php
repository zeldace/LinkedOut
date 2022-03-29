<?php
Session_start();
if ($_SESSION['status']!='admin')
{
  header('Location: unconnected');
}
?>

<!doctype html> 
<html lang="en"> 
   <head> 
      <meta charset="utf-8"> 
      <title>LinkedOut</title>
      <link rel="stylesheet" href="creation_entreprise.css">
      <link rel="icon" type="image" href="favicon.png">
      <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
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
                <div class="icone">
                <i class="fa-solid fa-business-time"></i>
                </div>
                <div class="label">
                    <a href="menuAdmin">Menu</a>
                </div>
                <div class="manage_firm">
                    <a href="ManageFirm">Manage Firm</a>
                </div>
                <div class="manage_offers">
                  <a href="form_offers.html">Manage offers</a>
                </div>
                <div class="manage_tutors">
                  <a href="form_tutors.html">Manage tutors</a>
                </div>
                <div class="manage_president">
                  <a href="form_classpr.html">Manage class presidents</a>
                </div>
                <div class="manage_student">
                    <a href="Test Formulaire Etudiant.html">Manage Student</a>
                </div>
                           
            </div>
        </nav>
    </header>
    <!--begin sign on form-->
    <main class="form-signin">
        <form action="../UpdateCompany" method="POST">
          <h1 class="h3 mb-3 fw-normal">Manage firms</h1>
          <div class="form-floating">
            <p><label for="floatingInput">Name</label></p>
            <input type="text" class="form-control" id="floatingInput" value=<?=$company->Name()?> name='Name'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">Buisness sector</label>
            <input type="text" class="form-control" id="floatingInput" value=<?=$company->Sector()?> name='Sector'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">StreetName</label>
            <input type="text" class="form-control" id="floatingInput" value=<?=$company->StreetName()?> name='StreetName'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">StreetNumber</label>
            <input type="number" class="form-control" id="floatingInput" value=<?=$company->StreetNumber()?> name='StreetNumber'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">City</label>
            <input type="text" class="form-control" id="floatingInput" value=<?=$company->City()?> name='City'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">PostalCode</label>
            <input type="number" class="form-control" id="floatingInput" value=<?=$company->PostalCode()?> name='PostalCode'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">Number of trainees</label>
            <input type="number" class="form-control" id="floatingInput" value=<?=$company->InternNumber()?> name='InternNumber'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">Pilot's trust</label>
            <input type="number" class="form-control" id="floatingInput" value=<?=$company->PilotTrust()?> name='PilotTrust'>
          </div>
          <div class="form-floating">
            <label for="floatingInput">Email</label>
            <input type="email" class="form-control" id="floatingInput" value="<?=$company->Email()?>" name='Email'>
          </div>
          <input type="hidden" class="form-control" id="floatingInput" value=<?=$company->IdCompany()?> name='IdCompany'>
          <div class="action">
            <div class="add">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </div>
          </div>
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
                    <div class="col-lg-3 item social"><a href="#"><i class="fa-brands fa-facebook-f"></i></i></a><a href="#"><i class="fa-brands fa-twitter"></i></i></a><a href="#"><i class="fa-brands fa-snapchat"></i></a><a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <p class="copyright">LinkedOut © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
   </body>