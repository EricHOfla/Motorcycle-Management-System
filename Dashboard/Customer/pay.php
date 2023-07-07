<?php 

            include 'navbar.php';
            $cid = $_SESSION['c_id'];
            $sid = $_GET['s_id'];
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Store</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Available motors</li>
          <li class="breadcrumb-item active">Pay</li>
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
  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview">Overview</button>
</li>

<!-- 
<li class="nav-item">
  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
</li> -->

</ul>
              <div class="tab-content pt-2">

            

               <?php
                 $fetch = mysqli_query($conn,"select * from store,application where store.s_id='$sid' and application.store_id='$sid'");
                  if($row = mysqli_fetch_array($fetch))
                     {
                     
                echo' <div class="tab-pane fade show active profile-overview" id="overview">

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
                       <div class="col-lg-9 col-md-8"> <h4>'.$row['mark'].'</h4></div>
                        
                      </div>
                    </div>

                   
                    <div class="row mb-3">
                      <label for="plate_no" class="col-md-4 col-lg-3 col-form-label">plate_no</label>
                      <div class="col-md-8 col-lg-9">
                      <div class="col-lg-9 col-md-8"> <h4>'.$row['plate_no'].'</h4></div>
                     
                      </div>
                    </div>

                      
                    <div class="row mb-3">
                        <label for="price" class="col-md-4 col-lg-3 col-form-label">price</label>
                        <div class="col-md-8 col-lg-9">
                        <div class="col-lg-9 col-md-8"> <h4>'.$row['price'].'</h4></div>
                         
                        </div>
                      </div>

                       <div class="row mb-3">
                      <label for="pay" class="col-md-4 col-lg-3 col-form-label">Payment Method</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="col-lg-9 col-md-8"><h3>'.$row['pay'].' </h3></div>
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="phone" class="col-md-4 col-lg-3 col-form-label">PAY ON MOMO</label>
                      <div class="col-md-8 col-lg-9">
                      <div class="col-lg-9 col-md-8">MOMO CODE<h4> *182*8*1*445886#</h4> <small>MOMO name:  EROH Technlogy Ltd</small></div>
                      </div>
                      </div><br>
                      <div class="row mb-3">
                      <label for="phone" class="col-md-4 col-lg-3 col-form-label">OR BANK</label>
                      <div class="col-md-8 col-lg-9">
                      <div class="col-lg-9 col-md-8">EQUITY Account<h3> 4005100858996</h3><small>BANK name:  Eric HABUMUGISHA</small></div>
                      </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                    <label for="photo" class="col-md-4 col-lg-3 col-form-label">PAY Type</label>
                      <div class="col-md-8 col-lg-9">
                       <select name="type" class="form-control">
                      
                       <option value="MOMO">Through MOMO</option>
                       <option value="BANK">Through BANK</option>
                       
                       </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                    <label for="photo" class="col-md-4 col-lg-3 col-form-label">How Much your Pay?</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="number" name="amount" class="form-control"  required placeholder="Enter Amaunt You pay in FRW">
                      </div>
                    </div>

                    <div class="row mb-3">
                    <label for="photo" class="col-md-4 col-lg-3 col-form-label">Prof Of Payment</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="file" name="photo" class="form-control" id="photo" required>
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="paym">PAY</button>
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
    
    if(isset($_POST['paym']))
    {
        $c_id = $_SESSION['c_id'];
        $s_id = $_POST['s_id'];
        $amount = $_POST['amount']; 
        $photo = $_POST['photo'];
        $type = $_POST['type'];
        
        

        $sql= mysqli_query($conn,"UPDATE `store` SET `status`='PAID' WHERE s_id='$s_id'");
        
        $sql = mysqli_query($conn,"INSERT INTO `payment`(`p_id`, `customer_id`, `store_id`, `amount`, `payment_type`, `pay_image`, pay_time) 
                                    VALUES(null, '$c_id', '$s_id', '$amount', '$type', '$photo', null)");
        if($sql == true)
      {
        ?>
        <script>
          alert('Payment Recieved');
        </script>
        <?php
        
       echo"<meta http-equiv='refresh' content='0;url=available_store.php'>";


      }

        
    }

    
?>

  </main><!-- End #main -->

  <?php 
      include "../footer.php"
         
  ?>
