<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`, `username`, `password`) 
           VALUES (NULL,'$first_name','$last_name','$email','$gender','$username', '$password')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: page-login.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bloodline - Register</title>
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Nunito|Poppins" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <h1 class="sitename">
                  <a href="index.php" class="logo d-flex align-items-center w-auto" style="text-decoration: none;">
                    <span style="color: #2c4964;">BloodLine</span>
                  </a>
                </h1>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="" method="post">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">First Name</label>
                      <input type="text" class="form-control" name="first_name"  required>
                    </div>

                    <div class="col-12">
                      <label for="yourLastname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="last_name"  required>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email"  required>
                    </div>

                    <div class="form-group mb-3">
                      <label>Gender:</label>
                      &nbsp;
                      <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                      <label for="male" class="form-input-label">Male</label>
                      &nbsp;
                      <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                      <label for="female" class="form-input-label">Female</label>
                    </div>

                    <div class="col mb-3">
                      <label for="yourUsername" class="form-label">Username</label>
                      <input type="text" class="form-control" name="username"  required>
                    </div>

                    <div class="col mb-3">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <p class="form-check-label" for="acceptTerms">I agree and accept the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and conditions</a></p>
                      </div>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary w-100" name="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="page-login.php">Log in</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Terms of Service Modal -->
  <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="termsModalLabel">Terms and Condition for Account Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Welcome to BloodLine, the blood service platform. Before you proceed with registering for our services, please take a moment to review our terms and conditions outlined below. By registering on Timewise, you agree to comply with these terms and conditions.</p>

          <h6>1. Data Privacy and Protection</h6>
          <p>By using our website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service.</p>

          <h6>2. Registration Information</h6>
          <p>BloodLine connects blood donors with individuals or organizations in need. We facilitate communication but do not manage the donation process.</p>

          <h6>3. Security Measures</h6>
          <p>You must be at least 18 years old or have parental consent to use our Services. By using BloodLine, you confirm you meet these criteria.</p>

          <h6>4. Use of Information</h6>
          <p>You are responsible for ensuring you meet all medical and legal requirements to donate blood. BloodLine does not guarantee acceptance of donations.</p>

          <h6>5. User Responsibilities</h6>
          <p>Your use of our Services is governed by our Privacy Policy, which details how we collect and use your personal information.</p>

          <h6>6. Changes to Terms and Conditions</h6>
          <p>You agree to use the Services lawfully and responsibly, refraining from posting false or harmful information.</p>

          <p>By registering on BloodLine, you acknowledge that you have read, understood, and agreed to these terms and conditions.</p>

          <p>If you have any questions about these Terms, please contact us at <a href="mailto:bloodline@gmail.com">bloodline@gmail.com</a>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

     <!-- Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
