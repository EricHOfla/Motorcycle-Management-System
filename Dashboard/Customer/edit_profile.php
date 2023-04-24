<?php 

     include 'navbar.php';
            
     $id =$_SESSION['c_id'];
     $password =$_SESSION['password'];
     $fetch = mysqli_query($conn,"select * from customer where c_id='$id'");
     if($row = mysqli_fetch_array($fetch))
     {
         

      echo' <main id="main" class="main">

      <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/boy.png" alt="Profile" class="rounded-circle">
              <h2>'.$row['customername'].'</h2>
             
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Basic info</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Profile Image</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> 

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First Name</div>
                    <div class="col-lg-9 col-md-8">'.$row['fname'].'</div>
                  </div>

                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Last Name</div>
                    <div class="col-lg-9 col-md-8">'.$row['lname'].'</div>
                  </div>

                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Username</div>
                    <div class="col-lg-9 col-md-8">'.$row['customername'].'</div>
                  </div>

                 

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8">'.$row['gender'].'</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">DOB</div>
                    <div class="col-lg-9 col-md-8">'.$row['dates'].'</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">'.$row['address'].'</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">'.$row['telephone'].'</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">'.$row['email'].'</div>
                  </div>

              
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Customer Status</div>
                    <div class="col-lg-9 col-md-8">'.$row['status'].'</div>
                    </div>

                </div>';
                  
               echo' <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form class="" action = "edit_profile.php" method = "POST">
                   
                  <div class="row mb-3">
                     
                      <div class="col-md-8 col-lg-9">
                        <input name="id" type="hidden" class="form-control" id="fullName" value='.$id.'>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="fullName" type="text" class="form-control" id="fullName" value="">'.$row['fname'].'</textarea>
                      </div>
                    </div>

                   
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="lname" type="text" class="form-control" id="company" value="">'.$row['fname'].'</textarea>
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Username</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="username" type="text" class="form-control" id="company" value="">'.$row['customername'].'</textarea>
                        </div>
                      </div>

                      
                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                        <textarea name="email" type="text" class="form-control" id="company" value="">'.$row['email'].'</textarea>
                        </div>
                      </div>

    
                    <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">DOB</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="dob" type="date" class="form-control" id="Date" value='.$row['dates'].'>
                        </div>
                      </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                      <div class="col-md-8 col-lg-9">
                       <select name="gender" id="gender" class="form-control">

                       <option value='.$row['gender'].'>'.$row['gender'].'</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                       </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="address"  class="form-control" id="Address" value="">'.$row['address'].'</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="phone" type="text" class="form-control" id="Phone" value="">'.$row['telephone'].'</textarea>
                      </div>
                    </div>

                      <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Customer status</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="status" id="status" class="form-control">
                            <option value='.$row['status'].'>'.$row['status'].'</option>
                            <option value="Allowed">Allowed</option>
                            <option value="Denied">Denied</option>
                           </select>
                      </div>
                    </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="save">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>';
             
           
              echo ' <div class="tab-pane fade pt-3 profile-edit" id="profile-settings">

                  <!-- Settings Form -->
                  <form class="" action = "edit_profile.php" method = "POST">

                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="assets/img/boy.png" alt="Profile">
                          <div class="ass">
                           <input type="file" class="btn btn- btn-sm" title="Upload new profile image" name ="image">
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                      </div>

                    <div class="text-center">
                      <button type="submit" name = "prof" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>';
           

               echo ' <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                
                <form class="" action = "edit_profile.php" method = "POST">
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="old_pass" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="new_pass" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="confirm_pass" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" name="change" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>'; 
                 
   
    if(isset($_POST['save']))
    {
        $id =$_POST['id'];
        $a = $_POST['fullName'];
        $b = $_POST['lname'];
        $c = $_POST['username'];
        $d = $_POST['email'];
        $g = $_POST['dob'];
        $h = $_POST['gender'];
        $i = $_POST['address'];
        $j = $_POST['phone'];
        $k = $_POST['status'];
        
        $sql = mysqli_query($conn,"update customer set fname='$a',lname='$b',customername='$c',telephone='$j',
    address='$i',email='$d',gender='$h',status='$k' where c_id='$id'");
    
    if($sql == true)
    {
      ?>
      <script>
        alert('updated');
      </script>
      <?php
   echo"<meta http-equiv='refresh' content='0;url=edit_profile.php'>";
   
   
    }
        
    }
    ?>


    <?php 
    if (isset($_POST['change'])) {
        $old_pass =$_POST['old_pass'];
        $new_pass =$_POST['new_pass'];
        $confirm_pass =$_POST['confirm_pass'];

        if ($old_pass !=$password) {
       
        ?>
        <script>
            alert("Old Password is Incorrect!!");
        </script>
        <?php
        }else if ($new_pass != $confirm_pass) {
      
        ?>
        <script>
            alert("Confirmed Password is Incorrect!");
        </script>
        <?php
        }else
         {
        $sql = mysqli_query($conn,"UPDATE `customer` SET `Password`='$new_pass' WHERE `c_id`='$id'");

        if ($sql == true) {
            ?>
            <script>
                alert("Password is successfuly updated!")
            </script>
            <?php
            echo "<meta http-equiv='refresh' content='0'>";
        }else {
            echo "Failed".mysqli_error($conn);
        }
        }

    }


  } 
    
?>

  </main><!-- End #main -->

  <?php 
      include "../footer.php"
         
   ?>
