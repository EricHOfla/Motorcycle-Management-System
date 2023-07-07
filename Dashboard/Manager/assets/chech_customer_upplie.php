<?php 

            include 'navbar.php';
            $id = $_GET['c_id'];

                   $fetch = mysqli_query($conn,"select * from customer,store,application
                    where store.s_id=application.store_id and customer.c_id=application.customer_id and store.s_id=application.store_id");
                   if($row = mysqli_fetch_array($fetch))
                   {
      echo' <main id="main" class="main">

     <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
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
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Requist info</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Profile Image</button>
                </li>
<!-- 
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> -->

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Customer Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First Name</div>
                    <div class="col-lg-9 col-md-8">'.$row['fname'].'</div>
                  </div>

                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Last Name</div>
                    <div class="col-lg-9 col-md-8">'.$row['lname'].'</div>
                  </div>               

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">'.$row['email'].'</div>
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
                    <div class="col-lg-9 col-md-8">'.$row['phone'].'</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">ID</div>
                    <div class="col-lg-9 col-md-8">'.$row['photo'].'</div>
                    </div>

               
                </div>';
                  
               echo' <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form class="" action = "" method = "POST">
                   
                  <div class="row mb-3">
                     
                      <div class="col-md-8 col-lg-9">
                        <input name="id" type="hidden" class="form-control" id="fullName" value='.$id.'>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Motor Mark</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="mark" type="text" class="form-control" id="fullName" value="">'.$row['mark'].'</textarea>
                      </div>
                    </div>

                   
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Motor Plate</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="plate" type="text" class="form-control" id="company" value="">'.$row['plate_no'].'</textarea>
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Payment Method</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="pay" type="text" class="form-control" id="company" value="">'.$row['pay'].'</textarea>
                        </div>
                      </div>

                          
                      <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Motor Status</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="statusm" type="text" class="form-control" id="company" value="">'.$row['status'].'</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Status</label>
                      <div class="col-md-8 col-lg-9">
                       <select name="requst" id="gender" class="form-control">

                       <option value='.$row['requ'].'>'.$row['requ'].'</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                       </select>
                      </div>
                    </div>
               
                    
                   

        
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="save">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>';
              }                
                   ?>
           
                <div class="tab-pane fade pt-3 profile-edit" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                          <img src='assets/img/boy.png' alt="Profile">
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
        
        $k = $_POST['requst'];
        
        $sql = mysqli_query($conn,"update store,customer,application set store.requ='$k',application.stat='Dane'
        where store.s_id=application.store_id and customer.c_id=application.customer_id and store.s_id=application.store_id");
    
    if($sql == true)
    {
      ?>
      <script>
        alert('updated');
      </script>
      <?php
   echo"<meta http-equiv='refresh' content='0;url=customers_info.php'>";
   
   
    }
        
    }

    
?>

  </main><!-- End #main -->

  <?php 
      include "../footer.php"
         
   ?>
