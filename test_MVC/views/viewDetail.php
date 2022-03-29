<!doctype html> 
<html lang="en"> 
   <head> 
      <meta charset="utf-8"> 
      <title>LinkedOut</title>
      <link rel="stylesheet" href="TestManage_firm.css">
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
                    <a href="menu_admin.html">Menu</a>
                </div>
                <div class="manage_firm">
                    <a href="manageFirm">Search offers</a>
                </div>
                <div class="manage_offers">
                  <a href="form_offers.html">My applications</a>
                </div>
                           
            </div>
        </nav>
    </header>
    <!--begin sign on form-->
      <table>
        <thead align="left" style="display :table-header-group">
          <tr>
            <th scope="row">Name Company</th>
            <th scope="row">Duration</th>
            <th scope="row">Compensation</th>
            <th scope="row">DateOffer</th>
            <th scope="row">NumberPlace</th>
            <th scope="row">OfferName</th>
            <th scope="row">Promotion</th>
            <th scope="row">Sector</th>
            <th scope="row">Skill</th>
            <th colspan="2"></th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td><?php echo $Offer->Name();?></td>
            </tr>
            <tr>
              <td><?php echo $Offer->Duration();?></td>
            </tr>
            <tr>
              <td><?php echo $Offer->Compensation();?></td>
            </tr>
            <tr>
              <td><?php echo $Offer->DateOffer();?></td>
            </tr>
            <tr>
              <td><?php echo $Offer->NumberPlace();?></td>
            </tr>
            <tr>
              <td><?php echo $Offer->OfferName();?></td>
            </tr>
            <tr>
              <td><?php echo $Offer->Promotion();?></td>
            </tr>
            <tr>
              <td><?php echo $Offer->Sector();?></td>
            </tr>
            <tr> 
              <td><?php echo $Offer->Skill();?></td>
            </tr>
        </tbody>
      </table>
      <td><!--Modify--><button class="w-100 btn btn-lg btn-primary" type="submit">Apply</button></td>
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