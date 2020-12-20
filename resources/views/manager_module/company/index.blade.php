<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Company Management</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/manager">CRM Spot</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <% if(full_name!=null) { %>
            <li class="active"><a href="/manager">Dashboard</a></li>
            <li><a href="/clients">Clients</a></li>
            <li><a href="/manager/company">Company</a></li>
            <li><a href="/manager/company/services">Services</a></li>
            <li><a href="/manager/chat">Chat</a></li>
            <li><a href="/manager/profile">Profile</a></li>
            <li><a href="/manager/signout">Sign Out</a></li>
          <% } else { %>
            <li><a href="/manager/login">Sign In</a></li>
          <% } %>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



  <main id="main">
    <section id="manager-profile-section">
      <div class="row justify-content-center">
        <div class="col col-xl-5 mt-3">
          <div id="manager-profile-box">
            <div class="bg-primary text-light pt-3 pb-2 pl-2">
              <div class="row justify-content-between">
                <div class="col-4">
                  <h5 class="text-left">Company Details</h5>
                </div>
                <div class="col-4 text-right">
                  <button class="btn btn-warning mr-1"><a href="/manager/company/edit/<%= user[0].id %>">Edit</a></button>
                </div>
              </div>
            </div>
            <table id="appointmentsTable" class="table table-striped table-bordered" style="width:100%">
              <tbody>
                <tr>
                  <td>Company Name</td>
                  <td> <%= user[0].company_name %></td>
                </tr>
                <tr>
                  <td>Address : </td>
                  <td> <%= user[0].company_address %></td>
                </tr>
                <tr>
                  <td>Contact Number</td>
                  <td> 0<%= user[0].contact_number %></td>
                </tr>
                <tr>
                  <td>Type : </td>
                  <td> <%= user[0].type %></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>CRM Spot</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">APWT G7</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/js/main.js"></script>
</body>

</html>