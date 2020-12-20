<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Proposal</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
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

        <section>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="text-center">
                        <br><h2><b><i><u>Proposal</u></i></b></h2><br>
                    </div>
                    <table id="proposalTable" class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <th>Subject</th>
                            <th>Body</th>
                            <th>Customer Name</th>
                            <th>Starting Date</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Zip Code</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                        </tr>
                        <% if(allNotes!=null) { for(var i=0; i< allNotes.length; i++) { %>
                            <tr>
                                <td><%= allNotes[i].title %></td>
                                <td><%= allNotes[i].subject %></td>
                                <td><%= allNotes[i].body %></td>
                                <td><%= allNotes[i].customer_name %></td>
                                <td><%= allNotes[i].starting_date %></td>
                                <td><%= allNotes[i].deadline_date %></td>
                                <td><%= allNotes[i].status %></td>
                                <td><%= allNotes[i].address %></td>
                                <td><%= allNotes[i].city %></td>
                                <td><%= allNotes[i].state %></td>
                                <td><%= allNotes[i].country %></td>
                                <td><%= allNotes[i].zip_code %></td>
                                <td><%= allNotes[i].email %></td>
                                <td>0<%= allNotes[i].phone %></td>
                                <td><%= allNotes[i].item %></td>
                                <td><%= allNotes[i].quantity %></td>
                                <td><%= allNotes[i].rate %></td>
                            </tr>
    
                        <% } } %>
                    </table>
                    <div class="text-center" id="printBtnID">
                        <button class="btn w-50 btn-success" onclick="printMe('printBtnID','proposalTable');">Print/Download</button>
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
                    Designed by <a href="#">Shohag</a>
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
    <script src="/assets/js/printProposal.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>