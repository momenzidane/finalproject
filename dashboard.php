<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dashboard - Client area</title>
  <link rel="stylesheet" href="style.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/templatemo-digital-trend.css">
  <style>
    .btn_me{
      background-color: #0C8195;
      border-radius: 15px;
      padding: 10px 20px;
      color: white;
      box-shadow: none;
      margin-left: 863px;
    }
  </style>
</head>

<body>
  <!-- <div class="form"> -->
  <!-- <p>Hey, ?>!</p> -->
  <!-- <p>You are in user dashboard page.</p> -->
  <!-- <p><a href="logout.php">Logout</a></p> -->
  <!-- </div> -->

  <nav class="navbar navbar-expand-lg position-absolute">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <i class="fa fa-university" style="font-size:40px;"></i>
        Model Unversity <span style="font-size: 25px">: Student Bage</span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active">Student</a>
          </li>
          <li class="nav-item">
            <a href="material.php" class="nav-link">Material</a>
          </li>
          <li class="nav-item">
            <a href="#blog.html" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link contact">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- BLOG -->
  <section class="blog section-padding" style="margin-top: -50px;
      padding-bottom: 30px;">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-12 py-5 mt-1 mb-10 text-center" style="margin-top: -30px">
          <h1 class="mb-4" data-aos="fade-up"><strong>Hey</strong>, <?php echo $_SESSION['username']; ?> </h1>
         
          
          <!-- <h1 class="mb-4" data-aos="fade-up">Welcome to the <strong>model</strong> page </h1> -->
        </div>


        <section class="ftco-section" style="margin-top: -420px; margin-left: 49px;">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center mb-5">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="">
                  <table class="table table-bordered table-dark table-hover" style=" border-bottom: 3px solid #0080ff;">
                    <thead>
                      <tr style="border-color: blue;background-color: #0C8195; border-bottom: 3px solid #0080ff;">
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>GPA</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // $search = $_POST['search'];
                      $conn = mysqli_connect('localhost', 'root', '', 'model');
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                      $sql = "select * from student ";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                          echo '<tr>' .
                            '<td>' . $row['id'] . '</td>' .
                            '<td>' . $row['FirstName'] . '</td>' .
                            '<td>' . $row['LastName'] . '</td>' .
                            '<td>' . $row['gpa'] . '</td>' .
                            // '<td><img src=' . "img/" . $row['image'] . '></td>' .
                            '<td><a href="update.php?id=' . $row['id'] . '" class="color_hover bbb"> Edit </a> </td>' .
                            "<td><a href='delete.php?id=" . $row["id"] . "' class='color_hover'>Delete</a></td>";
                          '</tr>';
                        }
                      } else {
                        echo "0 records";
                      }
                      $conn->close();
                      ?>

                    </tbody>
                  </table>
                  <a href="AddStudent.php" class="btn_me" > Add Student</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- 
                    <div class="col-lg-7 col-md-7 col-12 mb-4">
                      <div class="blog-header" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/blog/blog-header-image.jpg" class="img-fluid" alt="blog header">

                        <div class="blog-header-info">
                          <h4 class="blog-category text-info">Creative</h4>

                          <h3><a href="blog-detail.html">The Key to Creative Work is Knowing When to Walk Away</a></h3>
                        </div>
                      </div>
                    </div> -->
        <!-- 
                    <div class="col-lg-5 col-md-5 col-12 mb-4">
                      <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="images/blog/blog-sidebar-image.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-danger">Design</h4>

                          <h3><a href="blog-detail.html">Why Truly Accessible Design Benefits Everyone</a></h3>
                        </div>
                      </div>

                      <div class="blog-sidebar py-4 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <img src="images/blog/blog-sidebar-image01.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-success">lifestyle</h4>

                          <h3><a href="blog-detail.html">Be Humble About What You Know</a></h3>
                        </div>
                      </div>

                      <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="images/blog/blog-sidebar-image02.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-primary">Coding</h4>

                          <h3><a href="blog-detail.html">The Mistakes I Made As a Coding Beginner</a></h3>
                        </div>
                      </div>

                    </div> -->
        <!-- <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12"> -->
        <!-- 
                      <img src="images/newsletter.png" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
                    </div> -->
        <!-- <div class="col-lg-5 mr-auto mt-5 pt-5 col-md-6 col-12 newsletter-form">

                      <h4 data-aos="fade-up" data-aos-delay="200">Email Newsletter</h4>

                      <h2 data-aos="fade-up" data-aos-delay="300">Let’s stay up-to-date. We'll share you all good stuffs.</h2>
                      <form action="#" method="get" enctype="multipart/form-data">
                      <div class="form-group mt-4" data-aos="fade-up" data-aos-delay="400">
                        <input name="email" type="email" class="form-control" 
                        		id="email" aria-describedby="emailHelp" placeholder="Please enter your email" required>

                        <small id="emailHelp" class="form-text text-muted">We'll NOT share your email address to anyone else.</small>

                      </div>

                      <div class="form-group form-check" data-aos="fade-up" data-aos-delay="500">
                        <input name="monthly" type="checkbox" class="form-check-input" id="monthly">

                        <label class="form-check-label" for="monthly">Please send me a monthly newsletter.</label>
                      </div>

                        <button type="submit" data-aos="fade-up" data-aos-delay="500" class="btn w-100 mt-3">Sign up</button>
                      </form>
                    </div> -->

      </div>
    </div>
  </section>


  <footer class="site-footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
        </div>

        <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
          <h4 class="my-4">Contact Info</h4>

          <p class="mb-1">
            <i class="fa fa-phone mr-2 footer-icon"></i>
            +99 080 070 4224
          </p>

          <p>
            <a href="#">
              <i class="fa fa-envelope mr-2 footer-icon"></i>
              hello@company.com
            </a>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
          <h4 class="my-4">Our Studio</h4>

          <p class="mb-1">
            <i class="fa fa-home mr-2 footer-icon"></i>
            Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
          </p>
        </div>

        <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
          <p class="copyright-text">Copyright &copy; 2020 Your Company
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a>
          </p>
        </div>

        <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

          <ul class="footer-link">
            <li><a href="#">Stories</a></li>
            <li><a href="#">Work with us</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
          <ul class="social-icon">
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-dribbble"></a></li>
            <li><a href="#" class="fa fa-behance"></a></li>
          </ul>
        </div>

      </div>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>


</body>

</html>