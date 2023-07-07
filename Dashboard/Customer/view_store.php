<?php 

            include 'navbar.php';
            $cid = $_SESSION['c_id'];
            $sid = $_GET['s_id'];
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
        <div class="col-xl-6">

          <div class="card">
          
            <div class="card-body profil-card pt-4 d-flex flex-column align-items-center">
            <!-- <h4>username</h4>
              <h5>Admin</h5> -->
              <br><br>
              <img src="assets/img/motor.PNG" alt="Profile" class="runded">
              
            </div>
          </div>

        </div>

        <div class="col-xl-6">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>


                <li class="nav-item">
               <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Request Motor</button>
               </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <?php
                 $fetch = mysqli_query($conn,"select * from store where s_id='$sid'");
                  if($row = mysqli_fetch_array($fetch))
                     {
                     echo'<h5 class="card-title">Motor Details</h5>

                 <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Mark</div>
                    <div class="col-lg-9 col-md-8">'.$row['mark'].'</div>
                 </div>

  
                 <div class="row">
                   <div class="col-lg-3 col-md-4 label ">Plate_no</div>
                   <div class="col-lg-9 col-md-8">'.$row['plate_no'].'</div>
                 </div>

  
                 <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Price</div>
                  <div class="col-lg-9 col-md-8">'.$row['price'].'</div>
                 </div>

 

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8">'.$row['status'].'</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date Stored</div>
                    <div class="col-lg-9 col-md-8">'.$row['datestored'].'</div>
                  </div>

  

              </div>';
                    
                  
                echo' <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form class="" action = "" method = "POST">
                   
                  <div class="row mb-3">
                  <label for="s_id" class="col-md-4 col-lg-3 col-form-label"></label>
                  <div class="col-md-8 col-lg-9">
                    <input name="s_id" type="hidden" class="form-control" id="s_id" value='.$sid.'>
                  </div>
                </div>

                    <div class="row mb-3">
                      <label for="mark" class="col-md-4 col-lg-3 col-form-label">Mark</label>
                      <div class="col-md-8 col-lg-9">
                      <div class="col-lg-9 col-md-8">'.$row['mark'].'</div>
                        
                      </div>
                    </div>

                   
                    <div class="row mb-3">
                      <label for="plate_no" class="col-md-4 col-lg-3 col-form-label">plate_no</label>
                      <div class="col-md-8 col-lg-9">
                      <div class="col-lg-9 col-md-8">'.$row['plate_no'].'</div>
                      
                      </div>
                    </div>

                      
                    <div class="row mb-3">
                        <label for="price" class="col-md-4 col-lg-3 col-form-label">price</label>
                        <div class="col-md-8 col-lg-9">
                        <div class="col-lg-9 col-md-8">'.$row['price'].'</div>
                         
                        </div>
                      </div>
                    
                    <div class="row mb-3">
                      <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="number" class="form-control" id="phone" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                    <label for="photo" class="col-md-4 col-lg-3 col-form-label">ID / PASSPORT</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="file" name="photo" class="form-control" id="photo" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="address" type="text" class="form-control" id="adrress" value=""></textarea>
                        </div>
                      </div>

                    <div class="row mb-3">
                      <label for="pay" class="col-md-4 col-lg-3 col-form-label">Payment Method</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="pay" id="pay" class="form-control">
                        
                            <option value="75%">75%</option>
                            <option value="Full">Full</option>
                           </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                    <label for="date" class="col-md-4 col-lg-3 col-form-label">Date</label>
                    <div class="col-md-8 col-lg-9">
                      <input type = "date" name="date" class="form-control" id="date" value="">
                    </div>
                  </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="request">REQUEST</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>';
              }                
                   ?>
           
              


                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>';
  
<?php 
    
    if(isset($_POST['request']))
    {
        $c_id = $_SESSION['c_id'];
        $s_id = $_POST['s_id'];
        
      
        $phone = $_POST['phone'];
        
        $photo = $_POST['photo'];
        $address = $_POST['address'];
        $pay = $_POST['pay'];
        $date = $_POST['date'];

        $fetch = mysqli_query($conn,"select * from application where store_id='$s_id' and customer_id='$c_id' ");
                if ($row = mysqli_fetch_array($fetch))
                {
                  ?>
        <script>
          alert('Alread appried');
        </script>
        <?php
         echo"<meta http-equiv='refresh' content='0;url=available_store.php'>";
          
        }else{

        $sql= mysqli_query($conn,"UPDATE `store` SET `requ`='Pending' WHERE s_id='$s_id'");
        
        $sql = mysqli_query($conn,"INSERT INTO `application`
             (`a_id`, `customer_id`, `store_id`, `phone`, `photo`, `address`, `pay`, `dates`) 
        VALUES(null, '$c_id', '$s_id', '$phone', '$photo', '$address', '$pay', '$date')");
        if($sql == true)
      {
        ?>
        <script>
          alert('applied');
        </script>
        <?php
        
       echo"<meta http-equiv='refresh' content='0;url=available_store.php'>";


      }

    }
    }

    
?>

  </main><!-- End #main -->

  <?php 
      include "../footer.php"
         
  ?>
