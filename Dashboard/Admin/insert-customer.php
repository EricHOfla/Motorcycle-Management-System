
<?php
include "connect.php";

if(isset($_POST['send']))
{
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $username=$_POST['username'];
	 $email=$_POST['email'];
	 $telephone=$_POST['telephone'];
	 $address=$_POST['address'];
	 $gender=$_POST['gender'];
	 $photo=$_POST['photo'];
   $password=$_POST['password'];
   $repassword=$_POST['re-password'];
   $status="Allowed";
   


          if ($_POST["password"] == $_POST["re-password"])
	          {
		         // $password=md5($password);
             $sql="INSERT INTO `customer`(`c_id`, `fname`, `lname`, `customername`, `email`, `telephone`, `address`, `gender`, `photo`, `password`, `status`, `dates`) 
             VALUES (null, '$fname', '$lname', '$username', '$email','$telephone','$address','$gender','$photo','$password','$status',null)";
     
     
             $res=mysqli_query($conn,$sql);
              if ($res) 
                 { 
                
                   ?>
                     <script>
                       alert('You Registration was Successfful');
                     </script>
                      <?php
                       echo"<meta http-equiv='refresh' content='0;url=customers_info.php'>";

                 
    
                   }
               else
                  {
                 
                  echo " <script> alert('Something went wrong Please try again Later !')</script>";
                  }


                  
            }
      else{
         
         echo " <script> alert('Password you Enter Did not match')</script>";
     }}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/log.png" alt="">
                  <span class="d-none d-lg-block">MCMS</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Insert A New Customer</h5>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="fname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter first name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="lname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please, enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Telephone</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">+</span> -->
                        <input type="number" name="telephone" class="form-control" id="contact" required>
                        <div class="invalid-feedback">Please, enter contact.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Address</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="text" name="address" class="form-control" id="address" required>
                        <div class="invalid-feedback">Please, enter address</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Gender</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <select class="form-control" name="gender" id="gender" required>
                          <option>Select Gender</option>
                          <option value="Male">Male</option>
                          <option value="Male">Female</option>
                        </select>
                        <!-- <input type="radio" name="address" class="form-control" id="address" required> -->
                         
                        <div class="invalid-feedback">Please, choose gender</div>
                      </div>
                    </div>

                    
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Photo</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="file" name="photo" class="form-control" id="photo" required>
                        <div class="invalid-feedback">Please, insert a photo</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Re-Password</label>
                      <input type="password" name="re-password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter password again!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="send">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
              
                Designed by <a href="#">M</a>
              </div>
            </div>
          </div>
        </div>

      </section>
      <br>


    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>