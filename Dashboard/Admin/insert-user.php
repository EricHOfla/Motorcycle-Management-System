<?php 

            include 'navbar.php';
            ?>
 <main id="main" class="main">

     <div class="pagetitle">
      <h1>New User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">New user</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
       
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Register A New User</button>
                </li>

<!-- 
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> -->

              </ul>
              

               

                  
        

                 
<div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form class="" action = "insert-user.php" method = "POST">
                   
                  <div class="row mb-3">
                     
                      <div class="col-md-8 col-lg-9">
                        <input name="id" type="hidden" class="form-control" id="fullName" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="fullName" type="text" class="form-control" id="fullName"> </textarea>
                      </div>
                    </div>

                   
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="lname" type="text" class="form-control" id="company" value=""></textarea>
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Username</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="username" type="text" class="form-control" id="company" value=""></textarea>
                        </div>
                      </div>

                      
                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                        <textarea name="email" type="text" class="form-control" id="company" value=""></textarea>
                        </div>
                      </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Position</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="Posion" id="Posion" class="form-control">
                        
                            <option value=""></option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Customer">Customer</option>
                           </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">DOB</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="dob" type="date" class="form-control" id="Date">
                        </div>
                      </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                      <div class="col-md-8 col-lg-9">
                       <select name="gender" id="gender" class="form-control">

                       <option value=''></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                       </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="address"  class="form-control" id="Address" value=""></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="phone" type="text" class="form-control" id="Phone" value=""></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Account" class="col-md-4 col-lg-3 col-form-label">Account type</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="Account" id="Account" class="form-control">

                            <option value=''></option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Customer">Customer</option>
                           </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">User status</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="status" id="status" class="form-control">
                            <option value=''></option>
                            <option value="Allowed">Allowed</option>
                            <option value="Denied">Denied</option>
                           </select>
                      </div>
                    </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="save">Register</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
           
                <div class="tab-pane fade pt-3 profile-edit" id="profile-settings">

                  <!-- Settings Form -->

                </div>


                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
  
<?php 
    
    if(isset($_POST['save']))
    {
        $a = $_POST['fullName'];
        $b = $_POST['lname'];
        $c = $_POST['username'];
        $d = $_POST['email'];
        $f = $_POST['Posion'];
        $g = $_POST['dob'];
        $h = $_POST['gender'];
        $i = $_POST['address'];
        $j = $_POST['phone'];
        $z = $_POST['Account'];
        $k = $_POST['status'];
        
        $sql = mysqli_query($conn,"insert into users (Firstname,Lastname,Username,telephone,
    address,email,gender,position,dates,account_type,status) 
    values('$a','$b','$c','$j','$i','$d','$h','$f','$g','$z','$k')");
    
    if($sql == true)
    {
      ?>
      <script>
        alert('Reorded');
      </script>
      <?php
   echo"<meta http-equiv='refresh' content='0;url=user.php'>";
   
    }
        
    }

    
?>

  </main><!-- End #main -->

  <?php 
      include "../footer.php"
         
   ?>
