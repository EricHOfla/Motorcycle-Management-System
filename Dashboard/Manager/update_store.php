<?php 

            include 'navbar.php';
            $id = $_GET['s_id'];
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Store</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Store</li>
          <li class="breadcrumb-item active">Motors Stored</li>
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

<li class="nav-item">
  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Update Motor info</button>
</li>

<!-- 
<li class="nav-item">
  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
</li> -->

</ul>
              <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="overview">

               <?php
                 $fetch = mysqli_query($conn,"select * from store where s_id='$id'");
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
                  <form class="" action = "update_store.php" method = "POST">
                   
                  <div class="row mb-3">
                  <label for="s_id" class="col-md-4 col-lg-3 col-form-label"></label>
                  <div class="col-md-8 col-lg-9">
                    <input name="s_id" type="hidden" class="form-control" id="s_id" value='.$id.'>
                  </div>
                </div>

                    <div class="row mb-3">
                      <label for="mark" class="col-md-4 col-lg-3 col-form-label">Mark</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="mark" type="text" class="form-control" id="mark" value="">'.$row['mark'].'</textarea>
                      </div>
                    </div>

                   
                    <div class="row mb-3">
                      <label for="plate_no" class="col-md-4 col-lg-3 col-form-label">plate_no</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="plate_no" type="text" class="form-control" id="plate_no" value="">'.$row['plate_no'].'</textarea>
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="status" class="col-md-4 col-lg-3 col-form-label">status</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="status" type="text" class="form-control" id="status" value='.$row['status'].'>
                        </div>
                      </div>

                      
                    <div class="row mb-3">
                        <label for="price" class="col-md-4 col-lg-3 col-form-label">price</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="price" type="text" class="form-control" id="price" value="">'.$row['price'].'</textarea>
                        </div>
                      </div>

                    
                    <div class="row mb-3">
                        <label for="datestored" class="col-md-4 col-lg-3 col-form-label">Date stored</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="datestored" type="date" class="form-control" id="datestored" value='.$row['datestored'].'>
                        </div>
                      </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="save">Save Changes</button>
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
    
    if(isset($_POST['save']))
    {
        $id =$_POST['s_id'];
        $a = $_POST['mark'];
        $b = $_POST['plate_no'];
        $c = $_POST['status'];
        $d = $_POST['price'];
        $f = $_POST['datestored'];
        
        $sql = mysqli_query($conn,"update store set mark='$a',plate_no='$b',status='$c',price='$d',
        datestored='$f' where s_id='$id'");
        if($sql == true)
      {
        ?>
        <script>
          alert('updated');
        </script>
        <?php
      }

        
    }

    
?>

  </main><!-- End #main -->

  <?php 
      include "../footer.php"
         
  ?>
