<?php 

            include 'navbar.php';
            $id = $_GET['s_id'];
?>

  <main id="main" class="main">

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
          
            <div class="card-body profil-card pt-4 d-flex flex-column align-items-center">
            <!-- <h4>username</h4>
              <h5>Admin</h5> -->
              <br><br>
              <img src="assets/img/motor.PNG" alt="Profile" class="runded">
              
            </div>
          </div>

        </div>

        <div class="col-xl-4">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

<!-- 
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> -->

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <?php
                   $fetch = mysqli_query($conn,"select * from store where s_id='$id'");
                   if($row = mysqli_fetch_array($fetch))
                   {
                    echo'<h5 class="card-title">Store Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Mark</div>
                    <div class="col-lg-9 col-md-8">'.$row['mark'].'</div>
                  </div>

                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Plate</div>
                    <div class="col-lg-9 col-md-8">'.$row['plate_no'].'</div>
                  </div>

                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Price</div>
                    <div class="col-lg-9 col-md-8">'.$row['price'].'</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "></div>
                    <div class="col-lg-9 col-md-8"> <a href=request_store.php?s_id='.$id.'><i class="bi bi-Ask"></i>Request</a></div>
                  </div>

                  
                </div>';
              
              }                
                   ?>
           
                   

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>';
  
<?php 
    
    if(isset($_POST['save']))
    {
        $id =$_POST['id'];
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
        
        $sql = mysqli_query($conn,"update users set Firstname='$a',Lastname='$b',Username='$c',telephone='$j',
    address='$i',email='$d',gender='$h',position='$f',dates='$g',account_type='$z',status='$k' where User_id='$id'");
    
    if($sql == true)
    {
      ?>
      <script>
        alert('updated');
      </script>
      <?php
   echo"<meta http-equiv='refresh' content='0;url=store.php'>";
   
   
    }
        
    }

    
?>

  </main><!-- End #main -->

  <?php 
      include "../footer.php"
         
   ?>
