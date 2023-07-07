
<?php 
            include 'navbar.php';
            // include 'sidebar.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->

        <?php 
        
									$sql = mysqli_query($conn,"SELECT * FROM store where status='PAID'");
									$countstore = mysqli_num_rows($sql);
								?>
								
        <div class="col-xxl-4 col-md-6 col-xl-4">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Paid Store <span>| Today</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo $countstore; ?></h6>
                  <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <?php 
        
									$sql = mysqli_query($conn,"SELECT * FROM application");
									$countstore = mysqli_num_rows($sql);
								?>
        <div class="col-xxl-4 col-md-6 col-xl-4">
          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Booked Store <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo $countstore; ?></h6>
                  <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

          <!-- Sales Card -->
          <?php 
        
        $sql = mysqli_query($conn,"SELECT * FROM store where status!='PAID'");
        $countstore = mysqli_num_rows($sql);
      ?>
          <div class="col-xxl-4 col-md-6 col-xl-4">
          <div class="card info-card revenuel-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Available Store <span>| Today</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                <h6><?php echo $countstore; ?></h6>
                  <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


        <!-- Revenue Card -->

        <?php 
        
        $sql = mysqli_query($conn,"SELECT * FROM store where requ='Approved'");
        $countstore = mysqli_num_rows($sql);
      ?>
        <div class="col-xxl-4 col-md-6 col-xl-4">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Apploved Store <span>| Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                <h6><?php echo $countstore; ?></h6>
                  <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->



        <!-- Customers Card -->
        
        <?php 
        
        $sql = mysqli_query($conn,"SELECT * FROM customer");
        $countstore = mysqli_num_rows($sql);
      ?>
        <div class="col-xxl-4 col-xl-4">

          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                    <h6><?php echo $countstore; ?></h6>
                  <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

         <!-- Customers Card -->
          
        <?php 
        
        $sql = mysqli_query($conn,"SELECT * FROM users");
        $countstore = mysqli_num_rows($sql);
      ?>
         <div class="col-xxl-4 col-xl-4">

<div class="card info-card sales-card">

  <div class="filter">
    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <li class="dropdown-header text-start">
        <h6>Filter</h6>
      </li>

      <li><a class="dropdown-item" href="#">Today</a></li>
      <li><a class="dropdown-item" href="#">This Month</a></li>
      <li><a class="dropdown-item" href="#">This Year</a></li>
    </ul>
  </div>

  <div class="card-body">
    <h5 class="card-title">Users <span>| This Year</span></h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="bi bi-people"></i>
      </div>
      <div class="ps-3">
         <h6><?php echo $countstore; ?></h6>
        <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

      </div>
    </div>

  </div>
</div>

</div><!-- End Customers Card -->

      

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Sales <span>| This Year</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Check</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                $count = 1;  
                $fetch = mysqli_query($conn,"select * from customer,
                application,store where  store.s_id=application.store_id and customer.c_id=application.customer_id and store.requ='Approved'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo'
               
                 <tr>
                    <th scope="row"><a href="#">'.$count.'</a></th>
                    <td>'.$row['lname'].'</td>
                    <td><a href="#" class="text-primary">'.$row['mark'].'</a></td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['status'].'</td>
                    <td><span class="badge bg-success">'.$row['requ'].'</span></td>
                
                 
                 </tr>';
                  $count=$count +1;
                }
                ?>
               </tr>

               <tr>
                <?php
                
                $fetch = mysqli_query($conn,"select * from customer,
                application,store where  store.s_id=application.store_id and customer.c_id=application.customer_id and store.requ='Rejected'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo'
               
                 <tr>
                    <th scope="row"><a href="#">'.$count.'</a></th>
                    <td>'.$row['lname'].'</td>
                    <td><a href="#" class="text-primary">'.$row['mark'].'</a></td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['status'].'</td>
                    <td><span class="badge bg-danger">'.$row['requ'].'</span></td>
                
                 
                 </tr>';
                  $count=$count +1;
                }
                ?>
               </tr>

              
               </tr>

               <tr>
                <?php
                
                $fetch = mysqli_query($conn,"select * from customer,
                application,store where  store.s_id=application.store_id and customer.c_id=application.customer_id and store.requ='Pending'");
                while($row = mysqli_fetch_array($fetch))
                {
                 echo'
               
                 <tr>
                    <th scope="row"><a href="#">'.$count.'</a></th>
                    <td>'.$row['lname'].'</td>
                    <td><a href="#" class="text-primary">'.$row['mark'].'</a></td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['status'].'</td>
                    <td><span class="badge bg-warning">'.$row['requ'].'</span></td>
                
                 
                 </tr>';
                  $count=$count +1;
                }
                ?>
               </tr>

                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

      
      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

     
     

      

        </div>
      </div><!-- End News & Updates -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->



  <?php 
            include '../footer.php';
            
   ?>