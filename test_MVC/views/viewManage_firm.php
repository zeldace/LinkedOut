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
                    <a href="Student">Manage Student</a>
                </div>
                           
            </div>
        </nav>
    </header>
    <!--begin sign on form-->
    <div class="boutonadd">
      <a href="FormAddCompany" class="w-100 btn btn-lg btn-primary add">Add</a>
    </div>
      <table>
        <thead align="left" style="display :table-header-group">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">InternNumber </th>
            <th scope="col">Sector </th>
            <th scope="col">PilotTrust </th>
            <th scope="col">Email </th>
            <th scope="col">StreetName </th>
            <th scope="col">StreetNumber </th>
            <th scope="col">City </th>
            <th scope="col">PostalCode </th>
            <th scope="col" colspan="2">Edit</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($companies as $company):?>
            <tr>
              <td><?php echo $company->Name();?></td>
              <td><?php echo $company->InternNumber();?></td>
              <td><?php echo $company->Sector();?></td>
              <td><?php echo $company->PilotTrust();?></td>
              <td><?php echo $company->Email();?></td>
              <td><?php echo $company->StreetName();?></td>
              <td><?php echo $company->StreetNumber();?></td>
              <td><?php echo $company->City();?></td>
              <td><?php echo $company->PostalCode();?></td>
              <td><!--Modify--><a href=<?="FormUpdateCompany/".$company->IdCompany()?> class="w-100 btn btn-lg btn-primary">Update</a></td>
              <td><!--Delete--><a href=<?="DeleteCompany/".$company->IdCompany()?> class="w-100 btn btn-lg btn-primary">Delete</a></td>
              
            </tr>
            <?php endforeach;?>
        </tbody>
      </table>
    
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